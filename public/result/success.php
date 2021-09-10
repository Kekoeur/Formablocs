<?php

require_once (__DIR__ . '/../db/global_db.php');
require '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../../');
$dotenv->load();

$secretKey = $_ENV['STRIPE_SECRET_KEY'];
$stripe = new \Stripe\StripeClient($secretKey);

// ================= RECUPERER ID DE LA SESSION DE PAIEMENT DU CLIENT

$sessionID = $_SESSION['session'];
$priceID = $_SESSION['price_ID'];

$sessionDetails = $stripe->checkout->sessions->retrieve($sessionID,[]);
$customerID = $sessionDetails->customer;
$customerEmail = $sessionDetails->customer_details->email;
$date = $sessionDetails->metadata->date;

$retrievePrice = $stripe->prices->retrieve($priceID,[]);
$retrieveProd = $retrievePrice->product;

$prodInfo = $stripe->products->retrieve($retrieveProd,[]);
$prodName = $prodInfo->name;

// ================= AJOUTER ID STRIPE CLIENT DANS DATABASE

$stripeInfo = [
	'stripe_id' => $customerID,
	'customer_email' => $customerEmail,
	'formation' =>  $prodName,
	'date' => $date
];

$sql = "UPDATE customers SET stripe_id = :stripe_id, formations = CONCAT(:formation, ', ', formations), purchased_date = CONCAT(:date, ', ', purchased_date) WHERE email = :customer_email";
$stmt = $pdo->prepare($sql);
$stmt->execute($stripeInfo);

?>

<?php

require_once (__DIR__ . '/../includes/header.php');

?>


<section id="success">
	<div class="container">
		<div class="success-container">
			<div class="success-top">
				<h1>Confirmation de votre commande</h1>
				<img src="/Projet%204/public/assets/illustrations/ILLUSTRATIONS PAIEMENT SUCCES.svg" alt="">
				<div class="recap-success">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, delectus?</p>
				</div>
			</div>
			<div class="success-bottom">
				<h1>Merci beaucoup pour votre achat !</h1>
				<h4>Un reçu vous a été envoyé sur votre boîte mail.</h4>
				<p>Si vous n'avez rien reçu, veuillez cliquez <a href="#">ici</a></p>
				<a href="/Projet%204/public/index.php"><button>Retour à l'accueil</button></a>
			</div>
		</div>
	</div>
</section>



<?php

require_once (__DIR__ . '/../includes/footer.php');

?>