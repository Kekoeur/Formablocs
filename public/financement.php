<?php

require_once (__DIR__ . '/includes/header.php');

?>

<section id="home">
	<div class="home-bg-v2">
		<a href="#"><img src="<?=$domain?>/img/banners/Financement_ 1980x714 px.png" alt=""></a>
	</div>
</section>

<section id="home-ctas">
	<div class="container">
		<div class="home-btns">
			<a href="formations.php"><button>Je suis salarié</button></a>
			<a href="financement.php"><button>Je suis demandeur d'emploi</button></a>
			<a href="formations.php"><button>Autres cas</button></a>
		</div>
	</div>
</section>

<section id="salarie">
	<div class="container">
		<div class="salarie-container">
			<div class="finance-heading">
				<div class="about-title">
					<img src="assets/icons/FLECHE ORANGE.svg" alt="">
					<h1>Je suis <span>salarié</span></h1>
				</div>
				<img src="<?=$domain?>/illustrations/ILLUSTRATION FINANCEMENT 2.svg" alt="">
			</div>
		</div>
	</div>
</section>

<?php

require_once (__DIR__ . '/includes/footer.php');

?>