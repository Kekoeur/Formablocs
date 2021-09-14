<?php

require_once (__DIR__ . '/includes/header.php');

?>
<?php
    $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "subject" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "subjectError" => "", "messageError" => "", "isSuccess" => false);
    $emailTo = "christo26.g@gmail.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["subject"] = test_input($_POST["subject"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true; 
        $emailText = "";
        
        if (empty($array["firstname"]))
        {
            $array["firstnameError"] = "Veuillez saisir votre prénom :";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Firstname: {$array['firstname']}\n";
        }

        if (empty($array["name"]))
        {
            $array["nameError"] = "Veuillez saisir votre nom :";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Name: {$array['name']}\n";
        }
        if(empty($array["email"]))
        {
            $array["emailError"] = "Veuillez saisir une email :";
            $array["isSuccess"] = false;
        }
        else{
            if(!isEmail($array["email"])) 
            {
                $array["emailError"] = "Veuillez saisir un email valide :";
                $array["isSuccess"] = false; 
            } 
            else
            {
                $emailText .= "Email: {$array['email']}\n";
            }
        }
        if (!isPhone($array["phone"]))
        {
            $array["phoneError"] = "Veuillez saisir un numéro de téléphone valide :";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Phone: {$array['phone']}\n";
        }
        if (empty($array["subject"]))
        {
            $array["subjectError"] = "Veuillez saisir le sujet de votre message :";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Sujet: {$array['subject']}\n";
        }
        if (empty($array["message"]))
        {
            $array["messageError"] = "Veuillez saisir un message :";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "Message: {$array['message']}\n";
        }
        if($array["isSuccess"]) 
        {
            $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            if (mail($emailTo, "Un message de votre site : {$array['subject']}", $emailText, $headers)) {
              echo '<p>Votre message a bien été envoyer!</p>';
            } else {
              echo "<p>Erreur ! Votre message n'a pas été envoyé</p>";
            }
        }
        
        //echo json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>
<section id="contact">
<<<<<<< HEAD

	<div class="container">
		<div class="contact-container">

			<div class="contact-text">
				<h1>Vous avez une question ?</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui molestias quos eos perspiciatis autem necessitatibus corporis, cum non? Amet nemo ea eligendi, doloremque expedita minima odio animi totam magnam itaque cumque ipsum neque aut laudantium.</p>
			</div>

			<form id="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

				<div class="contact-row">
					<div class="contact-group">
						<label for="name">Nom <span class="color">*</span></label>
						<input id="name" type="text" name="name" class="form-control" placeholder="Entrez votre nom">
						<p class="comments"></p>
					</div>
					<div class="contact-group">
						<label for="firstname">Prénom <span class="color">*</span></label>
						<input id="firstname" type="text" name="firstname" class="form-control" placeholder="Entrez votre prénom">
						<p class="comments"></p>
					</div>
				</div>

				<div class="contact-row">
					<div class="contact-group">
						<label for="email">Adresse e-mail <span class="color">*</span></label>
						<input id="email" type="text" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
						<p class="comments"></p>
					</div>

					<div class="contact-group">
						<label for="phone">Téléphone</label>
						<input id="phone" type="tel" name="phone" class="form-control" placeholder="Entrez votre numéro de téléphone">
						<p class="comments"></p>
					</div>
				</div>

				<div class="contact-group">
					<label for="subject">Sujet du message <span class="color">*</span></label>
					<input id="subject" type="text" name="subject" placeholder="Entrez votre sujet du message">
					<p class="comments"></p>
				</div>

				<div class="textarea">
					<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
					<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
					<textarea id="message" name="message" placeholder="Ecrivez votre message" rows="8"></textarea>
					<p class="comments"></p>
				</div>

				<button type="submit" class="button">Envoyer</button>
			
       		</form>

			<div class="contact-banner">
				<div class="blur-div">
					<h1>Formablocs</h1>
					<h4>Adresse postale</h4>
					<p>07 89 67 23 43</p>
				</div>
			</div>

			<img src="<?=$domain?>/illustrations/CONTACT.svg" alt="Page de contact">

		</div>
	</div>

=======
  <div>
    <h1>Vous avez une question ?</h1>
    </p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea<p>
    <div class="row">
      <div class="formulaire">
          <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="row">
              <div class="col-md-6">
                <label for="name">Nom <span class="color">*</span></label>
                <input id="name" type="text" name="name" class="form-control" placeholder="Entrez votre nom">
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="firstname">Prénom <span class="color">*</span></label>
                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Entrez votre prénom">
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="email">Adresse e-mail <span class="color">*</span></label>
                <input id="email" type="text" name="email" class="form-control" placeholder="Entrez votre adresse e-mail">
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="phone">Téléphone</label>
                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Entrez votre numéro de téléphone">
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="subject">Sujet du message <span class="color">*</span></label>
                <input id="subject" type="text" name="subject" class="form-control" placeholder="Entrez votre sujet du message">
                <p class="comments"></p>
              </div>
              <img class="orange-circle" src="/assets/icons/ROND ORANGE.svg" alt="">
              <div class="col-md-12">
                <textarea id="message" name="message" class="form-control" placeholder="Ecrivez votre message" rows="8"></textarea>
                <p class="comments"></p>
              </div>
              <img class="orange-circle" src="/assets/icons/ROND ORANGE.svg" alt="">
              <div class="col-md-12">
                <input type="submit" class="button" value="Envoyer">
              </div>    
            </div>
          </form>
        </div>
    </div>
  </div>
>>>>>>> e71e838930f2a9c3f1fee2796c0022141b9abf77
</section>
<?php

require_once (__DIR__ . '/includes/footer.php');

?>