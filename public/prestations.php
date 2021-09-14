
<?php

require_once (__DIR__ . '/includes/header.php');

?>

<section id="home">
	<div class="home-bg-v2">
		<a href="#"><img src="<?=$domain?>/img/banners/Conseil_ 1980x714 px.png" alt=""></a>
	</div>
</section>

<section id="home-ctas">
	<div class="container">
		<div class="home-btns">
			<a href="formations.php"><button class="smaller-text">Formation pour les professionnels de la formation</button></a>
			<a href="financement.php"><button>Accompagnements</button></a>
		</div>
	</div>
</section>

<section id="prestations">
	<div class="container">
		<div class="prestations-container">
			<div class="prestations-header">
				<img src="assets/icons/FLECHE ORANGE.svg" alt="">
				<h1>Formations pour les <span>professionnels de la formation</span></h1>
			</div>

			<div class="prestations-carousel">

				<div class="finance-carousel-left-arrow">
					<img src="<?=$domain?>/icons/FLECHE GAUCHE BLEUE.svg" alt="Précedent" id="prev-1">
				</div>

				<div class="prestations-card">
					<div class="prestation-card-top">
							<h3>Digitalisation</h3>
							<p>Tarif : <span>2 000 € par formation</span></p>
						<?php if (isset($_SESSION['user_id'])) { ?>
							<form action="../checkout-session.php?formation=Digitalisation" method="POST">
								<button type="submit">Acheter cette prestation</button>
							</form>
							<form action="../create-quote.php?formation=<?=$row['formation']?>" method="POST">
								<button type="submit">Obtenir un devis</button>
							</form>
						<?php } else { ?>
							<form action="login-signup.php" method="POST">
								<button type="submit">Acheter cette prestation</button>
							</form>
							<form action="login-signup.php" method="POST">
								<button type="submit">Obtenir un devis</button>
							</form>
						<?php } ?>
					</div>
					<div class="prestation-card-text">
						<p></p>
					</div>
				</div>

				<div class="prestations-card">
					<div class="prestation-card-top">
							<h3>Ingénierie financière</h3>
							<p>Tarif : <span>2 000 € par formation</span></p>
						<?php if (isset($_SESSION['user_id'])) { ?>
							<form action="../checkout-session.php?formation=Ingénierie financière" method="POST">
								<button type="submit">Acheter cette prestation</button>
							</form>
							<form action="../create-quote.php?formation=<?=$row['formation']?>" method="POST">
								<button type="submit">Obtenir un devis</button>
							</form>
						<?php } else { ?>
							<form action="login-signup.php" method="POST">
								<button type="submit">Acheter cette prestation</button>
							</form>
							<form action="login-signup.php" method="POST">
								<button type="submit">Obtenir un devis</button>
							</form>
						<?php } ?>
					</div>
					<div class="prestation-card-text">
						<p></p>
					</div>
				</div>

				<div class="finance-carousel-right-arrow">
					<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="Suivant" id="next-1">
				</div>

			</div>

			<div class="prestations-bottom"></div>
		</div>
	</div>
</section>

<?php

require_once (__DIR__ . '/includes/footer.php');

?>