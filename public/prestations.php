
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
			<a href="formations.php" class="smaller-text blue-hover"><button>Formation pour les professionnels de la formation</button></a>
			<a href="financement.php" class="blue-hover"><button>Accompagnements</button></a>
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

			<img src="<?=$domain?>/illustrations/ILLUSTRATION PRESTATION 1.svg" alt="">

			<div class="prestations-carousel">

				<div class="prestation-left-arrow">
					<img src="<?=$domain?>/icons/FLECHE GAUCHE BLEUE.svg" alt="Précedent" id="prev-1">
				</div>

				<div class="prestations-card prestation-slide current-slide">
					<div class="prestation-card-top">
							<h3>Digitalisation</h3>
							<p>Tarif : <span>2 000 € par formation</span></p>

							<div class="prestation-top-btns">
								<?php if (isset($_SESSION['user_id'])) { ?>
									<form action="../checkout-session.php?link=Digitalisation" method="POST" class="red-hover">
										<button type="submit">Acheter cette prestation</button>
									</form>
									<form action="../create-quote.php?link=Digitalisation" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } else { ?>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Acheter cette prestation</button>
									</form>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } ?>
							</div>
					</div>
					<div class="prestation-card-text">
						<p>Avec l’avènement des nouvelle technologie et la démocratisation du télétravail, la digitalisation des formations est devenue incontournable pour les organismes de formation. Au delà d’une réelle demande des apprenants, elle permet d’augmenter la zone d’achalandise de l’organisme et d’augmenter le nombre d’apprenant en formation. Nous vous accompagnons dans la transformation numérique de votre offre en FOAD.</p>
					</div>
					<div class="carousel-dots">
						<span class="active-dot"></span>
						<span></span>
					</div>
				</div>

				<div class="prestations-card prestation-slide">
					<div class="prestation-card-top">
						<h3>Ingénierie financière</h3>
						<p>Tarif : <span>2 000 € par formation</span></p>
						<div class="prestation-top-btns">
							<?php if (isset($_SESSION['user_id'])) { ?>
								<form action="../checkout-session.php?link=inge" method="POST" class="red-hover">
									<button type="submit">Acheter cette prestation</button>
								</form>
								<form action="../create-quote.php?formation=inge" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } else { ?>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Acheter cette prestation</button>
								</form>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } ?>
						</div>
					</div>
					<div class="prestation-card-text">
						<p>Formablocs vous accompagne pour identifier vos charges fixes, vos charges variables, vos revenus afin d’en ressortir un seuil de rentabilité pour chaque action de formation et dégager des revenus. Nous vous proposons de co-cpnstruire avec vous, votre grille de coût personalisée pour une meilleure gestion financière de vos actions.</p>
					</div>
					<div class="carousel-dots">
						<span></span>
						<span class="active-dot"></span>
					</div>
				</div>

				<div class="prestation-right-arrow">
					<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="Suivant" id="next-1">
				</div>

			</div>
			<div class="prestations-carousel">

				<div class="prestation-left-arrow">
					<img src="<?=$domain?>/icons/FLECHE GAUCHE BLEUE.svg" alt="Précedent" id="prev-2">
				</div>

				<div class="prestations-card prestation2-slide current-slide">
					<div class="prestation-card-top">
							<h3>Qualité</h3>
							<p>Tarif : <span>1 500 à 4 000 € selon la taille de l'organisme</span></p>

							<div class="prestation-top-btns">
								<?php if (isset($_SESSION['user_id'])) { ?>
									<form action="../checkout-session.php?link=quality" method="POST" class="red-hover">
										<button type="submit">Acheter cette prestation</button>
									</form>
									<form action="../create-quote.php?link=quality" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } else { ?>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Acheter cette prestation</button>
									</form>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } ?>
							</div>
					</div>
					<div class="prestation-card-text">
						<p>Les différentes politique de l’emploi et de la formation imposent, aux organismes de formation, des critères de qualité de plus en plus exigeants. FormaBlocs vous accompagne pour la mise en conformité de votre structure en vu de l’obtention du certificat qualité Qualiopi.</p>
					</div>
					<div class="carousel-dots">
						<span class="active-dot"></span>
						<span></span>
					</div>
				</div>

				<div class="prestations-card prestation2-slide">
					<div class="prestation-card-top">
						<h3>Bilan pédagogique</h3>
						<p>Tarif : <span>900 €</span></p>
						<div class="prestation-top-btns">
							<?php if (isset($_SESSION['user_id'])) { ?>
								<form action="../checkout-session.php?link=bilan" method="POST" class="red-hover">
									<button type="submit">Acheter cette prestation</button>
								</form>
								<form action="../create-quote.php?link=bilan" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } else { ?>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Acheter cette prestation</button>
								</form>
								<form action="login-signup.php" method="POST" class="red-hover">
									<button type="submit">Obtenir un devis</button>
								</form>
							<?php } ?>
						</div>
					</div>
					<div class="prestation-card-text">
						<p>Formablocs vous accompagne pour identifier vos charges fixes, vos charges variables, vos revenus afin d’en ressortir un seuil de rentabilité pour chaque action de formation et dégager des revenus. Nous vous proposons de co-cpnstruire avec vous, votre grille de coût personalisée pour une meilleure gestion financière de vos actions.</p>
					</div>
					<div class="carousel-dots">
						<span></span>
						<span class="active-dot"></span>
					</div>
				</div>

				<div class="prestation-right-arrow">
					<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="Suivant" id="next-2">
				</div>

			</div>
			<div class="prestations-carousel">

				<div class="prestation-left-arrow">
					<img src="<?=$domain?>/icons/FLECHE GAUCHE BLEUE.svg" alt="Précedent" id="prev-3">
				</div>

				<div class="prestations-card prestation3-slide current-slide">
					<div class="prestation-card-top">
							<h3>RNCP</h3>
							<p>Tarif : <span>1 500 € par diplôme</span></p>

							<div class="prestation-top-btns">
								<?php if (isset($_SESSION['user_id'])) { ?>
									<form action="../checkout-session.php?link=RNCP" method="POST" class="red-hover">
										<button type="submit">Acheter cette prestation</button>
									</form>
									<form action="../create-quote.php?link=RNCP" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } else { ?>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Acheter cette prestation</button>
									</form>
									<form action="login-signup.php" method="POST" class="red-hover">
										<button type="submit">Obtenir un devis</button>
									</form>
								<?php } ?>
							</div>
					</div>
					<div class="prestation-card-text">
						<p>Proposer des titres enregistrés au RNCP c’est favorisé les possibilités de financement de ses formations. La démarche de reconnaissance est RNCP suit une méthodologie complexe. FormaBlocs peut vous accompagner.</p>
					</div>
					<div class="carousel-dots">
						<span class="active-dot"></span>
						<span></span>
					</div>
				</div>

				<div class="prestations-card prestation3-slide">
					<div class="prestation-card-top">
						<h3>Ingénierie pédagogique </h3>
						<p>Tarif : <span>40€/h</span></p>
						<div class="prestation-top-btns">
							<a href="contact.php" class="red-hover"><button>Nous contacter</button></a>
						</div>
					</div>
					<div class="prestation-card-text">
						<p>Notre experte, Mme Zitouni, a derrière elle 7 années d’expérience dans l’accompagnement à la reconversion, la gestion d’organismes de formation et la pédagogie. Elle peut vous accompagner dans l’ingénierie pédagogique de vos actions de formation. N’hésitez pas à nous faire part de vos besoins ou difficultés afin que l’on puisse vous faire une proposition personnalisée.</p>
					</div>
					<div class="carousel-dots">
						<span></span>
						<span class="active-dot"></span>
					</div>
				</div>

				<div class="prestation-right-arrow">
					<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="Suivant" id="next-3">
				</div>

			</div>

			<div class="prestations-bottom"></div>
		</div>
	</div>
</section>


<script src="<?=$domain?>/js/carousel-prestations.js"></script>
<?php

require_once (__DIR__ . '/includes/footer.php');

?>