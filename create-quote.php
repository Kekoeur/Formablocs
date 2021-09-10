<?php

require_once (__DIR__ . '/public/db/global_db.php');
require 'vendor/autoload.php';

$user = $pdo->query("SELECT * FROM customers WHERE id='". $_SESSION['user_id'] . "'");
$loggedIn = $user->fetch(PDO::FETCH_ASSOC);

$userID = $loggedIn['stripe_id'];

if ($_GET) {
	$stm = $pdo->prepare("SELECT * FROM formations WHERE id = ?");
	$stm->bindValue(1, $_GET['id']);
	$stm->execute();
	$row = $stm->fetch(PDO::FETCH_ASSOC);
}

$price_id = $row['price_id'];

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$secretKey = $_ENV['STRIPE_SECRET_KEY'];

$stripe = new \Stripe\StripeClient($secretKey);

$quote = $stripe->quotes->create([
	'customer' => $userID,
	'line_items' => [
	  [
		'price' => $price_id
	  ]
	]
]);

$quoteID = $quote->id;

$stripe->quotes->finalizeQuote($quoteID,[]);

$_SESSION['devis_id'] = $quoteID;

header("Location: public/result/devis.php")

?>