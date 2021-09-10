<?php

require_once (__DIR__ . '/../db/global_db.php');

$user = $pdo->query("SELECT * FROM customers WHERE id='". $_SESSION['user_id'] . "'");
$loggedIn = $user->fetch(PDO::FETCH_ASSOC);

$userFormations = $loggedIn['formations'];
$userPurchase = $loggedIn['purchased_date'];

$formationsList = substr($userFormations, 0, -2);
$formationArray = explode(',', $formationsList);

$formationsDate = substr($userPurchase, 0, -2);
$dateArray = explode(',', $formationsDate);

$objetFormations = (object) $formationArray;
$objetDate = (object) $dateArray;

foreach ($formationArray as $formationName) {
    $nomFormation = $pdo->query("SELECT * FROM formations WHERE formation = \"$formationName\"");
	$form = $nomFormation->fetchall(PDO::FETCH_ASSOC);
}

foreach ($dateArray as $dateOnly) {
	$dateOnly = $dateOnly;
}

?>

<?php

require_once (__DIR__ . '/../includes/header.php');

?>

<section id="user-header">
	<img src="<?=$domain?>/icons/FLECHE BAS BLEUE.svg" alt="">
	<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
	<div class="user-bg">
		<div class="container">
			<div class="user-header">
				<div class="user-text">
					<h1>Bienvenue sur votre profil !</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate magnam modi, sint ipsa explicabo aliquid aperiam obcaecati expedita placeat soluta dolores officia maiores animi illum similique porro dolorum.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="user-body">
	<div class="container">
		<div class="user-container">
			<div class="user-profile">
				<img src="<?=$domain?>/icons/ROND ORANGE.svg" alt="">
				<div class="user-img">
					<img src="<?=$domain?>/img/people/christian-buehner-DItYlc26zVI-unsplash (1).jpg" alt="">
				</div>
				<div class="user-details">
					<h2><?=$loggedIn['name']?></h2>
					<p>Description de l'utilisateur</p>
					<ul>
						<li>Localisation -</li>
						<li>Situation -</li>
						<li>Âge ?</li>
					</ul>
					<button>Modifier mon profil</button>
				</div>
			</div>
			<div class="user-messages">
				<div class="message-container">
					<div class="messages-header">
						<h1>Mes messages</h1>
					</div>
					<div class="reception">
						<h4>Votre boîte de réception est vide</h4>
						<img src="<?=$domain?>/illustrations/ILLUSTRATION ACCUEIL CARROUSEL.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="mes-formations">
	<div class="container">
		<div class="mes-formations-container">
			<h1>Mes formations et accompagnements</h1>
			<div class="mes-formations-list">

				<?php foreach($formationArray as $formation) { ?>

					<div class="mes-formations-card">
						<div class="mes-formations-card-text">
							<h3><?=$formation?></h3>
							<p>Commencée le : <?=$dateOnly?></p>
						</div>
						<div class="mes-formations-card-picto">
							<img src="<?=$domain?>/icons/<?=$picto?>" alt="">
						</div>
					</div>

				<?php } ?>
			</div>
		</div>
	</div>
</section>



<?php

require_once (__DIR__ . '/../includes/footer.php');

?>