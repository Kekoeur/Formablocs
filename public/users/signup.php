<?php

require_once (__DIR__ . '/../db/global_db.php');
require '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../../');
$dotenv->load();

$secretKey = $_ENV['STRIPE_SECRET_KEY'];
$stripe = new \Stripe\StripeClient($secretKey);

// ================= Action par l'utilisateur
if(isset($_POST['submit'])){
	
// ================= Récuperer les valeurs des differents champs de notre formulaire
	$name =  $_POST['name'];
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

					$run_register_query= $pdo->query("INSERT INTO customers (name, email, passw, stripe_id) VALUES ('$name', '$email', '$passHash', '$customerStripeID')");
					if($run_register_query){
						$user = $pdo->query("SELECT * FROM customers WHERE stripe_id='". $customerStripeID . "'");
						$loggedIn = $user->fetch(PDO::FETCH_ASSOC);

						$_SESSION['user_id'] = $loggedIn['id'];
						header("Location: ../index.php");
					} else {
						echo "<p class=\"comments\">ERROR! Impossible de vous enregistrer maintenant, veuillez reéssayer</p>";
					}
					
				}
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formablocs | Inscription</title>
</head>
<body>

	<form id="signup-form" method="POST" action="" >
		<div class="row">
			<div class="col-md-6">
				<label for="name">Nom et Prenom</label>
				<input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom et Prenom">     
			</div>
			<div class="col-md-6">
				<label for="email">Email</label>
				<input id="email" type="email" name="email" class="form-control" placeholder="Votre Email">     
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label for="password">Mot de passe</label>
				<input id="password" type="password" name="password" class="form-control" placeholder="Votre Mot de passe">           
			</div>
			<div class="col-md-6">
				<label for="confirmPassword">Confirmation</label>
				<input id="confirmPassword" type="password" name="confirmPassword" class="form-control" placeholder="Confirmez votre Mot de passe" ></input>     
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button type="submit" name="submit" class="button">S'inscrire</button>
			</div>
			<p class="comments" id="comments"></p>
		</div>   
	</form>
	
</body>
</html>