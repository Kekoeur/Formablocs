<?php
	require_once (__DIR__ . '/db/global_db.php');

	$stm = $pdo->query("SELECT * FROM formations");
	$rows = $stm->fetchall(PDO::FETCH_ASSOC);

	$counter = 0;

	$stm2 = $pdo->query("SELECT * FROM modules_formation_adultes");
	$rows2 = $stm2->fetchall(PDO::FETCH_ASSOC);

	$stm3 = $pdo->query("SELECT * FROM modules_formation_conseiller");
	$rows3 = $stm3->fetchall(PDO::FETCH_ASSOC);

?>

<?php

require_once (__DIR__ . '/includes/header.php');

?>
<script src="<?=$domain?>/js/formations.js"></script>
<section id="home">
	<div class="home-bg-v2">
		<a href="#"><img src="<?=$domain?>/img/banners/Decouverte_ 1980x714 px.png" alt=""></a>
	</div>
</section>

<section id="home-ctas">
	<div class="container">
		<div class="home-btns">
			<a href="formations.php" class="blue-hover"><button>Formateur Professionnel d'Adultes</button></a>
			<a href="financement.php" class="blue-hover"><button>Conseiller en Insertion Professionnelle</button></a>
		</div>
	</div>
</section>

<div class="inter-section">
	<div class="container">
		<div class="intersection">
			<h1>Le saviez-vous ?</h1>
			<img src="assets/icons/FLECHE ORANGE.svg" alt="">

			<h4>Nos parcours sont accessibles par la voie de la VAE (Validation des Acquis de l'Expérience).</h4>
			
			<div class="inter-wrapper">
				<h5>Vous souhaitez avoir plus d'informations ?</h5>
				<p>Direction sur : <a href="https://www.vae.gouv.fr/">https://www.vae.gouv.fr/</a></p>
			</div>

			<a href="financement.php" class="red-hover"><button>Mes options de financement</button></a>
		</div>
	</div>
</div>

<section id="formations">
	<div class="container">
		<div class="formations-container">

			<?php foreach($rows as $row) { ?>

				<div class="formation-header">
					<div class="formation-title">
						<img src="assets/icons/FLECHE ORANGE.svg" alt="">
						<h1><?=$row['formation']?> <span>(bac+2)</span></h1>
					</div>
					<div class="formations-info">
						<span>Niveau 5 - RNCP247</span>
						<p>Tarif de la formation : <span>2 500 € (financement individuel)</span></p>
						<p>Tarif d'un module : <span>1 000 € (financement individuel)</span></p>
					</div>
				</div>

				<div class="formation-card-container">
					<div class="formation-card">
						<div class="card-wrapper">

							<p><?=$row['description']?></p>
							<div class="card-btns">
							<?php if (isset($_SESSION['user_id'])) { ?>
								<form action="../checkout-session.php?link=<?=$row['link']?>" method="POST" class="red-hover">
									<button type="submit" class="">Acheter cette formation</button>
								</form>
								<form action="../create-quote.php?link=<?=$row['link']?>" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } else { ?>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Acheter cette formation</button>
								</form>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } ?>
							</div>
						</div>
					</div>
					<div class="display-module_container">
						<img src="assets/icons/FLECHE BAS BLEUE.svg" alt="Flèche bleue vers le bas" class="display_module">
					</div>
					<?php if ( $row === reset( $rows ) ) {
							foreach($rows2 as $row2) {?>

					<div class="formation-card module">
						<div class="card-wrapper">
							<h2>Module : <?=$row2['module']?></h2>
							<p><?=$row2['description']?></p>
							<div class="card-btns">
							<?php if (isset($_SESSION['user_id'])) { ?>
								<form action="../checkout-session.php?link=<?=$row2["link"]?>" method="POST" class="red-hover">
									<button type="submit">Acheter ce module</button>
								</form>
								<form action="../create-quote.php?link=<?=$row2["link"]?>" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } else { ?>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Acheter ce module</button>
								</form>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } ?>
							</div>
						</div>
					</div>

					<?php }?>
					<img src="<?=$domain?>/icons/SEPARATION SECTION.svg" alt="">

					<?php } else if( $row === end( $rows ) ) {
					foreach($rows3 as $row3) { ?>
							
						<div class="formation-card module">
							<div class="card-wrapper">
								<h2>Module : <?=$row3['module']?></h2>
								<p><?=$row3['description']?></p>
								<div class="card-btns">
								<?php if (isset($_SESSION['user_id'])) { ?>
									<form action="../checkout-session.php?link=<?=$row3["link"]?>" method="POST" class="red-hover">
										<button type="submit">Acheter ce module</button>
									</form>
									<form action="../create-quote.php?link=<?=$row3["link"]?>" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } else { ?>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Acheter ce module</button>
									</form>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } ?>
								</div>
							</div>
						</div>
					<?php } } ?>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="formations-footer">
		<div class="f-footer-text">
			<div class="f-footer-text-header">
				<img src="assets/icons/FLECHE ORANGE.svg" alt="">
				<h1>Comment financer ma formation ?</h1>
			</div>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatem animi veritatis sit. Odio ex dolores fugit itaque corrupti architecto, nisi dicta harum voluptatum aperiam nulla! Eos obcaecati minima natus.</p>
			<a href="financement.php" class="red-hover"><button>En savoir plus</button></a>
		</div>
		<img src="<?=$domain?>/illustrations/ILLUSTRATION _COMMENT FINANCER MA FORMATION_.svg" alt="">
	</div>
</section>



<?php

require_once (__DIR__ . '/includes/footer.php');

?>