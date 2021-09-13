<?php

$domain = '/Projet%204/public/assets';
require_once (__DIR__ . '../../db/global_db.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formablocs</title>

	<!-- ================= CSS ================== -->
	<link rel="stylesheet" href="<?=$domain?>/css/style.css">
	<link rel="stylesheet" href="https://use.typekit.net/afv1gmg.css">

	<!-- ================ SCRIPTS ================ -->
	<script src="<?=$domain?>/js/script.js"></script>

	<!-- ================ JQUERY ================= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

<?php

	require_once (__DIR__ . '/nav.php');

?>