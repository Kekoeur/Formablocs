
<?php

require_once (__DIR__ . '/includes/header.php');

?>
<?php
    if(isset($_GET['state'])){
        $state = $_GET['state'];
        if($state === "registered"){
            echo "<script>alert('Enregistrement réussi. Vous pouvez maintenant vous connecter');</script>";
            $state = "";
        }
    }
    if(isset($_POST['submit_login'])){
        
        $username = $_POST['login-username'];
        $password = $_POST['login-password'];
        echo $username, $password;
        if(empty($username) || empty($password)){
            echo "<p class=\"comments\">Veuillez remplir tout les champs</p>";
        }else{
            $stm = $pdo->query("SELECT * FROM customers WHERE username=\"$username\"");
            $user = $stm->fetch(PDO::FETCH_ASSOC);
        
            if(!empty($user)){
                //L'User est enregistré
                $db_username = $user['username'];
                $db_password = $user['passw'];
                echo $db_username, $db_password;
                //Vérifier si le Password correspond
                if(password_verify($password, $db_password)){
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: index.php");
                    exit();
                }else{
                    echo "<p class=\"comments\">L'utilisateur et le mot de passe ne correspondent pas</p>";
                }
            }else{
                echo "<p class=\"comments\">Vous n'êtes pas enregistrer. Veuillez vous enregistrez et reéssayer</p>";
            }
        }
        
    
    /* 	if($user['role'] == "admin"){
            if($_POST['password'] == $user['passw']) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: admin.php");
                exit();
            } else {
                echo 'Error :(';
            }
        } else {
            if($_POST['password'] == $user['passw']) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: accueil.php");
                exit();
            } else {
                echo 'Error :(';
            }
        } */
    }
?>

<div id="LoginSignup">
  <section id="login">
    <div>
      <h1>Bonjour !</h1>
      <form  action="" method="POST" >
        <div class="row">
            <div class="col-md-12 input">
              <label for="login-username">Nom d'utilisateur</label>
              <img src="<?=$domain?>/icons/USER ORANGE.svg" alt="">
              <input id="login-username" type="text" name="login-username" placeholder="Entrez votre nom d'utilisateur">
            </div>
            <div class="col-md-12 input">
              <label for="login-password-id">Mot de passe</label>
              <img src="<?=$domain?>/icons/CADENAS MDP.svg" alt="">
              <input id="login-password-id" type="password" name="login-password" class="form-control" placeholder="Entrez votre mot de passe">
            </div>
        </div>
        <div class="col-md-12">
          <p>Mot de passe oublié ? Cliquez <a id="open_modal" href="#modal">ici</a></p>
        </div>
        <div class="col-md-12 input">
          <button class="btn" id="submit-login_btn" type="submit" name="submit_login">Me connecter</button>
        </div>
        <div class="col-md-12">
          <p>Vous n'avez pas encore de compte ?</p>
        </div>
        <div class="col-md-12">
          <img src="<?=$domain?>/icons/FLECHE BAS BLEUE.svg" alt="">
        </div>
      </form>
    </div>
  </section>
<?php
  if(isset($_POST['submit_recovery'])){
      $email = $_POST['recovery_email'];
      $stm = $pdo->query("SELECT * FROM customers WHERE email=\"$email\"");
      $user = $stm->fetch(PDO::FETCH_ASSOC);
      if(!empty($user)){
        function generateRandomString($length = 10) {
            return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
        }
        $new_password = generateRandomString();
        echo $new_password;
        $new_password_hash = password_hash($new_password, PASSWORD_BCRYPT);
        $run_register_query= $pdo->query("UPDATE customers SET passw = \"$new_password_hash\" WHERE email=\"$email\"");
        $headers = "From: Formablocs - Site de formation <contact@formablocs.com>\r\nReply-To: contact@formablocs.com";
        if(mail($email, "Votre nouveau mot de passe", "Voici votre nouveau mot de passe {$new_password}", $headers)){
          echo "<p class=\"comments\">Votre nouveau mot de passe a été envoyé sur votre adresse email.</p>";
        }else{
          echo "<p class=\"comments\">Erreur lors de l'envoie de l'email avec le nouveau mot de passe.</p>";
        }
      }else{
          echo "<p class=\"comments\">Cette adresse email n'existe pas. Veuillez reéssayer</p>";
      }
    }
?>
  <div id="modal" class="modal">
    <div class="modal_content">
      <h1>Récupération du mot de passe</h1>
      <form action="" method="POST">
        <div>
          <label for="recovery_email">Votre adresse email</label>
          <input id="recovery_email" type="text" name="recovery_email" placeholder="Entrez votre adresse email">
        </div>
        <div class="input">
          <button class="btn" id="submit_recovery" type="submit" name="submit_recovery"><a href="">Récupérer mon mot de passe</a></button>
        </div>
      </form>

      <a href="" class="modal_close">&times;</a>
    </div>
  </div>
<?php

require_once (__DIR__ . '/db/global_db.php');
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createMutable('../');
$dotenv->load();

$secretKey = $_ENV['STRIPE_SECRET_KEY'];
$stripe = new \Stripe\StripeClient($secretKey);

// ================= Action par l'utilisateur
if(isset($_POST['submit_signup'])){
	
// ================= Récuperer les valeurs des differents champs de notre formulaire
	$name =  $_POST['firstname'].' '.$_POST['lastname'];
	$username =  $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
	
// ================= Si les champs sont vides, ou mdp differents
	if(empty($name) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)){
		echo "<p class=\"comments\">Veuillez remplir tout les champs du formulaire</p>";
	} else {
		if($password !== $confirmPassword){
			echo "<p class=\"comments\">Les mots de passes sont différents</p>";
		} else { // ================= Verifier si l'User est deja enregistré
			$run_query = $pdo->prepare("SELECT * FROM customers WHERE email = ?");
			$run_query->bindValue(1,$email);
			$run_query->execute();

			if($run_query->rowCount() > 0 ){
				echo "<p class=\"comments\">L'adresse e-mail est déja enregistrer</p>";
			} else {
				$run_query = $pdo->prepare("SELECT * FROM customers WHERE username = ?");
				$run_query->bindValue(1,$username);
        $run_query->execute();

				if($run_query->rowCount() > 0 ){
				echo "<p class=\"comments\">Le nom d'utilisateur est déja enregistrer</p>";
				} else { // ================= Sinon l'enregister
					$passHash = password_hash($_POST['password'], PASSWORD_BCRYPT);

					$newCustomer = $stripe->customers->create([
						"email" => $email,
						"name" => $name,
					]);

					$customerStripeID = $newCustomer->id;

          $run_register_query= $pdo->query("INSERT INTO customers (name, username, email, passw, stripe_id) VALUES (\"$name\", \"$username\", \"$email\", \"$passHash\", \"$customerStripeID\")");
					if($run_register_query){
						$user = $pdo->query("SELECT * FROM customers WHERE stripe_id='". $customerStripeID . "'");
						$loggedIn = $user->fetch(PDO::FETCH_ASSOC);

						$_SESSION['user_id'] = $loggedIn['id'];
						header("Location: /index.php");
					} else {
						echo "<p class=\"comments\">ERROR! Impossible de vous enregistrer maintenant, veuillez reéssayer</p>";
					}
					
				}
			}
		}
	}
}
?>
  <section id="signup">
    <div>
      <form method="POST" action="">
        <div class="row">
          <div class="col-md-6 input">
              <label for="lastname">Nom</label>
              <input id="lastname" type="text" name="lastname" class="form-control" placeholder="Entrez votre nom">     
          </div>
          <div class="col-md-6 input">
              <label for="firstname">Prénom</label>
              <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Entrez votre prénom">     
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 input">
              <label for="username">Nom d'utilisateur</label>
              <input id="username" type="text" name="username" class="form-control" placeholder="Créez votre nom d'utilisateur">     
            </div>
            <div class="col-md-6 input">
                <label for="email">Adresse e-mail</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">     
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 input">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" class="form-control" placeholder="Créez votre mot de passe">           
            </div>
            <div class="col-md-6 input">
                <label for="confirmPassword">Répétez votre mot de passe</label>
                <input id="confirmPassword" type="password" name="confirmPassword" class="form-control" placeholder="Veuillez répéter votre mot de passe" >   
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn" id="submit-signup_btn" type="submit" name="submit_signup">M'inscrire</button>
            </div>
        </div>   
      </form>
    </div>
  </section>
</div>
<?php

require_once (__DIR__ . '/includes/footer.php');

?>