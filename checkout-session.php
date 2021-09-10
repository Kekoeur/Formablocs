<?php

header('Content-Type: application/json');

require_once (__DIR__ . '/public/db/global_db.php');
require 'vendor/autoload.php';

$user = $pdo->query("SELECT * FROM customers WHERE id='". $_SESSION['user_id'] . "'");
$loggedIn = $user->fetch(PDO::FETCH_ASSOC);

if ($_GET) {
	$stm = $pdo->prepare("SELECT * FROM formations WHERE id = ?");
	$stm->bindValue(1, $_GET['id']);
	$stm->execute();
	$row = $stm->fetch(PDO::FETCH_ASSOC);
}

$price_id = $row['price_id'];

date_default_timezone_set("France/Paris");
$date = date("d/m/Y");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$secretKey = $_ENV['STRIPE_SECRET_KEY'];
$domainURL = $_ENV['DOMAIN_URL'];

$stripe = new \Stripe\StripeClient($secretKey);

$userID = $loggedIn['stripe_id'];

$checkout_session = $stripe->checkout->sessions->create([
	'line_items' => [[
		'price' => $price_id,
		'quantity' => 1,
	]],
	'payment_method_types' => [
		'card',
	],
	'mode' => 'payment',
	'metadata' => [
		'date' => $date
	],
	'customer' => $userID,
	'success_url' => $domainURL . 'result/success.php',
	'cancel_url' => $domainURL . 'result/cancel.php',
]);

$_SESSION['session'] = $checkout_session->id;
$_SESSION['price_ID'] = $price_id;

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>