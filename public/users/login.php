<?php

require_once (__DIR__ . '/../db/global_db.php');

if($_POST){
	$stm = $pdo->query("SELECT * FROM customers WHERE email='". $_POST['email'] . "'");
	$user = $stm->fetch(PDO::FETCH_ASSOC);

	if(password_verify($_POST['password'], $user['passw'])){
		$_SESSION['user_id'] = $user['id'];
		header("Location: ../index.php");
		exit();
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form action="" method="POST">
		<h1>Identifiez-vous</h1>
		<div class="inputs">
			<label for="id">
				<input type="email" name="email" id="id" placeholder=" " required>
				<span>Utilisateur</span>
			</label>

			<label for="mdp">
				<input type="password" name="password" id="mdp" placeholder=" " required>
				<span>Mot de passe</span>
			</label>
		</div>

		<div class="form-ctas">
			<button type="submit" name="submit">Login</button>
			<h4>Mot de passe oublié? <a href="#">Cliquez ici</a></h4>
		</div>
	</form>
	
</body>
</html>