<?php 
//on importe le setting
include('../config/setting.php');

$error =false;


//si $_POST est totalement vide
	if (empty($_POST)) {
		$error =true;
		flash_in('error','vous n\'avez pas creer de compte');
	}else{
		//Sinon lanncer tout le script si dessous
		$_POST =array_map('trim',$_POST);
		//Verification du contenu dans l'input
	if (empty($_POST['form_motdepasse'])) {
		$error =true;
		flash_in('error','le mot de passe est obligatoire');
	}
	if ($_POST['form_motdepasse']!= $_POST['form_motdepasses']) {
		flash_in('error', 'Les deux mot de passe ne sont pas identiques');
		$error =true;
	}
	}
	if ($error) {
		header('Location: ../adduser.php');
		exit();
}
// Si il n'y a pas de contenu dans l'input lui par defaut la valleur null
if(empty($_POST['form_nom']))
	$_POST['form_nom']=null;

if(empty($_POST['form_prenom']))
	$_POST['form_prenom']=null;

if(empty($_POST['form_email']))
	$_POST['form_email']=null;

//variable pour inserer les elements dans la base de données puis association de l'input avec la donné  voulu
$add=$db->prepare('INSERT INTO users (lastname, firstname, email, password) VALUES ( :l, :f, :e, :p)');

$add->execute([
':l'=>$_POST['form_nom'],
':f'=>$_POST['form_prenom'],
':e'=>$_POST['form_email'],
':p'=>crypt_password($_POST['form_motdepasse'])
]);

if (empty($_POST)) {
	$error=true;
	flash_in('error','Non !');
}else{
	//variable pour lire les elements dans la base de données puis association de l'input avec les données  voulu
	$search =$db->prepare('SELECT * FROM users WHERE email = :u AND password = :p');
	$search->execute([
		':u'=>$_POST['form_email'],
		':p'=>crypt_password($_POST['form_motdepasse']),
	]);
	//Si la variaable search ne contient aucune ligne alors une error si produira
	if ($search->rowcount() == 0) {
		$error=true;

	}else{
		//Sinon cration de la variable data qui aura pour function de chercher les information demander dans la base de donnée
		$data =$search->fetch(PDO::FETCH_ASSOC);

		$_SESSION['user'] = $data;
	}
}

flash_in('sucess','bienvenue');
//Si tout le scripts a été executer correctement nous redirecger vers la page d'accueil
header('Location: ../paye.php');
exit();