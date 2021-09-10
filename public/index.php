<?php

require_once (__DIR__ . '/includes/header.php');

?>


<section id="home">
	<img src="assets/icons/FLECHE BAS BLEUE.svg" alt="">
	<img src="assets/icons/ROND ORANGE.svg" alt="">
	<div class="home-bg">
		<div class="container">
			<div class="home-container">
				<div class="home-text">
					<h2>Retrouvez toutes les informations pour financer votre formation <span>quelque soit votre situation !</span></h2>
					<h3>CPF - Pôle Emploi - OPCO <br> Entreprises - Transition Professionnelle</h3>
					<div class="home-btns">
						<a href="formations.php"><button>Consulter les formations</button></a>
						<a href="financement.php"><button>Mes options de financement</button></a>
						<a href="formations.php"><button>Obtenir mon devis</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about-us">
	<div class="container">
		<div class="about-container">
			<div class="about-title">
				<img src="assets/icons/FLECHE ORANGE.svg" alt="">
				<h1>Qui sommes-nous ?</h1>
			</div>
			<div class="video-container">
				<video src="assets/video/Animation_FormaBlocs.mp4" autoplay muted controls loop></video>
			</div>
		</div>
	</div>

	<div class="video-carousel">
		<div class="container">
			<div class="carousel-container">
				<div class="left-btn">
					<img src="assets/icons/FLECHE GAUCHE BLEUE.svg" alt="">
				</div>
				<div class="slider">
					<div class="slider-text">
						<h2>Pourquoi choisir Formablocs ?</h2>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae praesentium impedit pariatur, blanditiis laborum tempore nisi consequuntur autem adipisci aut aspernatur laudantium placeat expedita suscipit. Fugit rem quia facere expedita!</p>	
					</div>
					<div class="slider-img">
						<img src="assets/illustrations/ILLUSTRATION ACCUEIL CARROUSEL.svg" alt="">
					</div>
				</div>
				<div class="right-btn">
					<img src="assets/icons/FLECHE DROITE BLEUE.svg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="home-formations">
	<div class="container">
		<div class="formations-accueil">
			<div class="about-title">
				<img src="assets/icons/FLECHE ORANGE.svg" alt="">
				<h1>Nos formations</h1>
			</div>
			<div class="categories-formations">
				<div class="formations-card-home">
					<img src="assets/icons/ROND ORANGE.svg" alt="">
					<div class="card-img-container">
						<img src="assets/img/people/PHOTO-ACCUEIL-1.jpg" alt="">
					</div>
					<a href="#">Formateur Professionnel <br> d'Adultes (bac+2)</a>
				</div>

				<div class="formations-card-home">
					<img src="assets/icons/ROND ORANGE.svg" alt="">
					<div class="card-img-container">
						<img src="assets/img/people/PHOTO-ACCUEIL-2.jpg" alt="">
					</div>
					<a href="#">Conseiller en Insertion <br> Professionnelle (bac+2)</a>
				</div>
			</div>
			<div class="cta-btn-home">
				<a href="#"><button>Découvrir nos formations</button></a>
			</div>
		</div>
	</div>
</section>

<section id="last-carousel-home">
	<div class="container">
		<div class="last-carousel-container">
			<div class="about-title">
				<img src="assets/icons/FLECHE ORANGE.svg" alt="">
				<h1>Nos prestations de conseil</h1>
			</div>
			<div class="carousel-container2">
				<div class="left-btn2">
					<img src="assets/icons/FLECHE GAUCHE BLEUE.svg" alt="">
				</div>
				<div class="slider2">
					<div class="slider-card">
						<div class="slider-card-img">
							<img src="assets/img/people/aerial-view-hands-working-computer-white-table-office.jpg" alt="">
						</div>
						<a href="#">Digitalisation</a>
					</div>
					<div class="slider-card">
						<img src="assets/icons/ROND ORANGE.svg" alt="">
						<img src="assets/icons/ROND ORANGE.svg" alt="">
						<div class="slider-card-img relative-img">
							<img src="assets/img/people/christina-wocintechchat-com-4PU-OC8sW98-unsplash.jpg" alt="">
						</div>
						<a href="#">Qualité</a>
					</div>
					<div class="slider-card">
						<div class="slider-card-img">
							<img src="assets/img/people/christina-wocintechchat-com-eF7HN40WbAQ-unsplash.jpg" alt="">
						</div>
						<a href="#">RNCP</a>
					</div>
				</div>
				<div class="right-btn2">
					<img src="assets/icons/FLECHE DROITE BLEUE.svg" alt="">
				</div>
			</div>
			<div class="cta-btn-carousel">
				<a href="#"><button>Découvrir nos prestations</button></a>
			</div>
		</div>

	</div>
</section>


<?php

require_once (__DIR__ . '/includes/footer.php');

?>