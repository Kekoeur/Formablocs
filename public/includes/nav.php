<header>
		<div class="container">
			<div class="header-main">
				<div class="header-info">
					<div class="info-a">
						<img src="<?=$domain?>/icons/TELEPHONE.svg" alt="Téléphone">
						<a href="tel:+330789672343"> 07 89 67 23 43</a>
					</div>
					<div class="info-b">
						<img src="<?=$domain?>/icons/ENVELOPPE.svg" alt="Mail">
						<a href="mailto:forma.blocs@blabla.fr"> forma.blocs@blabla.fr</a>
					</div>
					
				</div>
				<?php if (isset($_SESSION['user_id'])) { ?>
					<a class="user-icon" href="<?=$domain?>/../users/user.php"><img src="<?=$domain?>/icons/USER.svg" alt="Votre compte"></a>
				<?php } else { ?>
					<a class="user-icon" href="<?=$domain?>/../users/login.php"><img src="<?=$domain?>/icons/USER.svg" alt="Votre compte"></a>
				<?php } ?>
			</div>
		</div>
</header>

<div class="navbar">
	<div class="container">
		<div class="nav">
			<div class="logo">
				<img src="<?=$domain?>/img/logo.png" alt="Formablocs | Accueil">
			</div>
			<div class="navlinks">
				<ul class="navlist">
					<li><a href="<?=$domain?>/../index.php"><svg class="home-icon" xmlns="http://www.w3.org/2000/svg" width="31.581" height="33" viewBox="0 0 31.581 33"><path d="M55.215,52.089h-7.75a1.107,1.107,0,0,1-1.107-1.107V42.125H40.823v8.857a1.107,1.107,0,0,1-1.107,1.107h-7.75a1.107,1.107,0,0,1-1.107-1.107v-15.5H28.907a1.107,1.107,0,0,1-.769-1.9L42.822,19.4a1.1,1.1,0,0,1,1.538,0L59.043,33.579a1.107,1.107,0,0,1-.769,1.9H56.323v15.5A1.107,1.107,0,0,1,55.215,52.089ZM40.823,41.018h5.536a1.107,1.107,0,0,1,1.107,1.107v8.857h7.75v-15.5a1.107,1.107,0,0,1,1.107-1.107h1.957L43.591,20.2,28.907,34.375h1.951a1.107,1.107,0,0,1,1.107,1.107v15.5h7.75V42.125A1.107,1.107,0,0,1,40.823,41.018Z" transform="translate(-27.8 -19.088)"/></svg></a></li>
					<li><a href="<?=$domain?>/../formations.php">Nos formations</a></li>
					<li><a href="<?=$domain?>/../prestations.php">Nos prestations de conseil</a></li>
					<li><a href="<?=$domain?>/../financement.php">Financement</a></li>
					<li><a href="<?=$domain?>/../contact.php">Contact</a></li>
					<li><a href="<?=$domain?>/../formations.php">Devis</a></li>
					<li><a href="<?=$domain?>/../forum.php">Forum</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>