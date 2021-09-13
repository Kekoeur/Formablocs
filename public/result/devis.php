
<?php

require_once (__DIR__ . '/../db/global_db.php');
require '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../../');
$dotenv->load();

$secretKey = $_ENV['STRIPE_SECRET_KEY'];

$stripe = new \Stripe\StripeClient($secretKey);

$quoteID = $_SESSION['devis_id'];

$myfile = fopen("devis.pdf", "w");

$pdf = $stripe->quotes->pdf($quoteID, function ($chunk) use (&$myfile) {
  fwrite($myfile, $chunk);
});

fclose($myfile);

?>

<?php

require_once (__DIR__ . '/../includes/header.php');

?>

<section id="home">
	<div class="home-bg">
		<a href="#"><img src="<?=$domain?>/img/banners/Profil_ 1980x714 px.png" alt=""></a>
	</div>
</section>

<section id="devis-pdf">
	<div class="container">
		<div class="devis-pdf-container">
			<div class="pdf-container">
				<object data="devis.pdf" type="application/pdf"></object>
			</div>
			<div class="devis-bottom-text">
				<h2>Votre devis a été créé.</h2>
				<p class="send-pdf">Cliquez ici pour le recevoir sur votre boîte mail.</p>
			</div>
		</div>
	</div>
</section>


<?php

require_once (__DIR__ . '/../includes/footer.php');

?>