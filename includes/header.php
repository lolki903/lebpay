<?php 

$filepath=$_SERVER['PHP_SELF'];

$t=explode('/', $filepath);
$script = array_pop($t);
 ?>
<header>
	<figure class="logos"><img src="../img/logo.png" alt=""></figure>
	<nav>
	<a href="index.php" <?php if ($script=='index.php') {
			echo 'class="active"';
		} ?>><img class="logo" src="img/logo.png" alt="logo"></a>
		<?php //Si il y a un utilisateur connecter
		if (!empty($_SESSION['user'])){  ?>
		<a href="core/logout.php">Se deconnecter</a>

		<?php }else{ //Si il n'y pas d'utiliseur connecter afficher cette partie ?>
			<a href="propos.php">A propos</a>
			<a href="contact.php">Contact</a>
		<a class="cree" href="adduser.php" <?php if ($script=='adduser.php') {
			echo 'class="active"';
		} ?>>Créer un compte</a>
		<a class="connec" href="login.php"<?php if ($script=='login.php') {
			echo 'class="active lo"';
		} ?>>Se connecter</a>
		<?php } ?>
	</nav>
</header>