<?php 
//setting
include('config/setting.php');

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<?php 
	include('includes/head.php') ?>
	<title>LebPay</title>
</head>
<body>
	<?php include('includes/header.php') ?>

	<main class="premiere">
		<h1>bienvenue</h1>
		<h2>Voici votre espace client</h2>
	</main>
	<section>
		<div class="nav_deux">
		<a href="#">Compte</a>
		<a href="#">Transaction effectuer</a>
		<a href="#">Virement</a>
		<a href="#">Information</a>
		</div>
	</section>
	<section class="arge">
		<h1>Solde de votre compte:</h1>
		<p>Livret A <span id="liva"><?php ?></span></p>
		<p>Compte chèque<span>9 500€</span></p>
	</section>
<?php include('includes/footer.php'); ?>
</body>
</html>