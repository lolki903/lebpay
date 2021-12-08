<?php 
//setting
include('../config/setting.php');

$_SESSION['user'] =null;

flash_in('sucess','A bientôt');

header('Location: ../index.php');
exit();