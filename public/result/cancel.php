<?php

require_once (__DIR__ . '/../includes/header.php');

?>

<section id="echec">
	<div class="container">
		<div class="echec-top">
			<h1>Votre commande n'a pas pu aboutir</h1>
			<img src="<?= $domain ?>/assets/illustrations/ILLUSTRATION ECHEC.svg" alt="">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, delectus?</p>
			<a href="<?= $domain ?>/index.php"><button>Retour à l'accueil</button></a>
		</div>
	</div>
</section>

<?php

require_once (__DIR__ . '/../includes/footer.php');

?>