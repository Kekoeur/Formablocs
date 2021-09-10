<?php
	require_once (__DIR__ . '/db/global_db.php');

	$stm = $pdo->query("SELECT * FROM formations");

	$rows = $stm->fetchall(PDO::FETCH_ASSOC);
?>

<?php

require_once (__DIR__ . '/includes/header.php');

?>

<section id="formation-header">
	<img src="<?=$domain?>/icons/FLECHE BAS BLEUE.svg" alt="">
	<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
	<div class="formation-bg">
		<div class="container">
			<div class="formation-header">
				<div class="formation-text">
					<h1>Décrouvrez nos formations</h1>
					<p>Lorem ipsum dolor sit amet.</p>
					<div class="cta-formations-btns">
						<a href="#"><button>Formateur Professionnel d'Adultes</button></a>
						<a href="#"><button>Conseiller en Insertion Profesionnelle</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php foreach($rows as $row) { ?>


	<div class="card">
		<div class="card-bottom">
			<div class="card-text">
				<h2><?=$row['formation']?></h2>
				<h3>Catégorie : <?=$row['price']?> €</h3>
				<p><?=$row['description']?></p>
				<form action="../checkout-session.php?id=<?=$row['id']?>" method="POST">
					<button type="submit">Acheter</button>
				</form>
				<form action="../create-quote.php?id=<?=$row['id']?>" method="POST">
					<button type="submit">Devis</button>
				</form>
			</div>
		</div>
	</div>


<?php } ?>




<?php

require_once (__DIR__ . '/includes/footer.php');

?>