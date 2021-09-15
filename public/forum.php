<?php

require_once (__DIR__ . '/includes/header.php');

?>

<section id="home">
	<div class="home-bg">
		<a href="#"><img src="<?=$domain?>/img/banners/Forum_ 1980x714 px.png" alt=""></a>
	</div>
</section>

<section id="forum-body">
	<div class="container">
		<div class="forum-wrapper">
			<div class="forum-search">
				<form class="search-form" action="#">
					<input type="text" placeholder="Recherchez des mots-clés" required>
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="forum-messages">
				<div class="forum-messages-container">

					<div class="forum-top">
						<span class="dropdown-el">
							<input type="radio" name="sortType" value="Trier par" checked="checked" id="sort-relevance">
							<label for="sort-relevance" class="low-opacity">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-best">
							<label for="sort-best">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-low">
							<label for="sort-low">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-high">
							<label for="sort-high">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-brand">
							<label for="sort-brand">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-name">
							<label for="sort-name">Trier par</label>

						</span>
					</div>

					<div class="forum-message">
						<div class="forum-user-img">
							<img src="<?=$domain?>/img/people/christian-buehner-DItYlc26zVI-unsplash (1).jpg" alt="">
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis ducimus, tenetur perspiciatis atque optio sed quos? Odit, cupiditate tenetur.</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							<img src="<?=$domain?>/img/people/christian-buehner-DItYlc26zVI-unsplash (1).jpg" alt="">
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis ducimus, tenetur perspiciatis atque optio sed quos? Odit, cupiditate tenetur.</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							<img src="<?=$domain?>/img/people/christian-buehner-DItYlc26zVI-unsplash (1).jpg" alt="">
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis ducimus, tenetur perspiciatis atque optio sed quos? Odit, cupiditate tenetur.</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							<img src="<?=$domain?>/img/people/christian-buehner-DItYlc26zVI-unsplash (1).jpg" alt="">
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis ducimus, tenetur perspiciatis atque optio sed quos? Odit, cupiditate tenetur.</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							<img src="<?=$domain?>/img/people/christian-buehner-DItYlc26zVI-unsplash (1).jpg" alt="">
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora debitis ducimus, tenetur perspiciatis atque optio sed quos? Odit, cupiditate tenetur.</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<img src="<?=$domain?>/icons/FLECHE BAS BLEUE.svg" alt="">
				</div>
				<div class="forum-filters-container">
					<h1>Mes filtres</h1>
					<div class="filter">
						<button class="active-filter"></button>
						<h2>Financement</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Formations</h2>
					</div>
					<div class="filter">
						<button class="active-filter"></button>
						<h2>Accompagnements</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
				</div>
			</div>
			<div class="forum-bottom">
				<h1>Vous ne trouvez pas votre bonheur sur le forum ?</h1>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum est eligendi enim animi perspiciatis, quae error officia magni illo? Dolores.</p>
				<a href="<?=$domain?>/../contact.php" class="red-hover"><button>Nous contacter</button></a>
			</div>
		</div>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?=$domain?>/js/trier.js"></script>
<?php

require_once (__DIR__ . '/includes/footer.php');

?>