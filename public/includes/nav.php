<header>
	<div class="container">
		<div class="header-main">
			<div class="header-info">
				<div class="info-a">
					<a href="tel:+330789672343"><img src="<?=$domain?>/icons/TELEPHONE.svg" alt="Téléphone"></a>
					<a href="tel:+330789672343"> 07 89 67 23 43</a>
				</div>
				<div class="info-b">
					<a href="mailto:forma.blocs@blabla.fr"><img src="<?=$domain?>/icons/ENVELOPPE.svg" alt="Mail"></a>
					<a href="mailto:forma.blocs@blabla.fr"> forma.blocs@blabla.fr</a>
				</div>
			</div>
			<div class="right-icons">
				<a href="<?=$domain?>/../index.php"><img src="<?=$domain?>/icons/MAISON BLANCHE.svg" alt="Accueil"></a>
				<?php if (isset($_SESSION['user_id'])) { ?>
					<a href="<?=$domain?>/../includes/logout.php"><img src="<?=$domain?>/icons/SE DECONNECTER.svg" alt="Déconnexion"></a>
					<div class="user-account">
						<a class="user-icon" href="<?=$domain?>/../users/user.php"><img src="<?=$domain?>/icons/USER.svg" alt="Votre compte"> <span><?php echo $_SESSION['user_name']?></a></span> 
					</div>
				<?php } else { ?>
					<div class="user-account">
						<a class="user-icon" href="<?=$domain?>/../login-signup.php"><img src="<?=$domain?>/icons/USER.svg" alt="Login"> <span>Se connecter</a></span> 
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</header>

<div class="navbar">
	<div class="container">
		<div class="nav">
			<div class="logo">
				<a href="<?=$domain?>/../index.php"><img src="<?=$domain?>/img/logo.png" alt="Formablocs | Accueil"></a>
			</div>
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<div class="navlinks">
				<ul class="navlist">
					<li class="linko"><a href="<?=$domain?>/../formations.php">Nos formations</a></li>
					<li class="linko"><a href="<?=$domain?>/../prestations.php">Nos prestations de conseil</a></li>
					<li class="linko"><a href="<?=$domain?>/../financement.php">Financement</a></li>
					<li class="linko"><a href="<?=$domain?>/../contact.php">Contact</a></li>
					<li class="linko"><a href="<?=$domain?>/../forum.php">Forum</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>