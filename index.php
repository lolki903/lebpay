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
		<h1>LebPay</h1>
		<h2>Le nouveau moyen de paiement en ligne</h2>
	</main>
	<section class="art">
		<h1 class="title">Pourquoi devriez vous choisir LebPay ?</h1>
		<div class="ico">
			<article class="arti">
				<figure class="ser"><img id="rota"src="img/5.png" alt=""></figure>
				<p>Banque en ligne</p>
			</article>
			<article class="arti">
				<figure class="ser"><img src="img/7.png" alt=""></figure>
				<p>Paiements</p>
			</article>
			<article class="arti">
				<figure class="ser"><img src="img/6.png" alt=""></figure>
				<p id="cry">Accepte les crypto-monnaies</p>
			</article>
		</div>
		<a href="adduser.php"><button>Ouvrir un compte</button></a>
	</section>
	<section>
		<article class="aun">
			<h1>Pourquoi plus s’orienter vers une banque en ligne ?</h1>
			<div>
			<figure><img src="img/2.jpg" alt="images de carte bancaire avec piece"></figure>
			<p>LebPay est une application web servant de compte bancaire et de paiement tout cela se passent en ligne sur votre ordinateur ou même sur votre mobile. Avec les banques en ligne vous aurez aussi la possibilité de payer dans certain magasin avec de la crypto monnaie telles que décathlon, Travala ainsi que bien d'autre enseigne.</p>
			</div><a href="#"><button>Découvrir les banques en ligne</button></a></div>
		</article>
		<article class="adeux">
			<h1>Quels type de paiement lebpay propose ?</h1><div>
			<p>Passez à la caisse en un instant avec votre compte Lebpay. Il vous suffit de lier votre compte bancaire, cartes de débit ou de crédit et de définir votre mode de paiement principal. Passez à la caisse avec votre mode de paiement principal pour payer ou choisissez à chaque fois que vous effectuez un achat. Il y a aussi la possibilité de passer au paiement grace Ala crypto-monnaie.</p>
			<figure><img src="img/3.png" alt=""></figure>
			</div><a href="#"><button>Découvrir LebPay</button></a>
		</article>
		<article class="atrois">
			<h1>Qu’es-ce qu’est une crypto-monnaie ?</h1>
			<div>
				<figure><img src="img/4.jpg" alt=""></figure>
				<p>La cryptographie permet de protéger les transactions, de contrôler la création de pièces supplémentaires et de vérifier le transfert de propriété des pièces. L’utilité d’utiliser de la crypto monnaie est la facilité de paiement ainsi que de ne pas confier son argent a une banque. La crypto monnaie est accepter par les cartes visa et les MasterCard ainsi que les comptes PayPal, nous avons aussi la possibilité de payer dans des grands magasins comme décathlon grâce à la crypto monnaie. </p>
			</div><a href="#"><button>En savoir plus sur les crypto monnaies</button></a>
		</article>
		</section>
<?php include('includes/footer.php'); ?>
</body>
</html>