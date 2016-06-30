<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'accueil';
}
$action = $_REQUEST['action'];
switch($action){
	case 'accueil':{
                $data =$pdo->getderniereoffre();
		include("vues/v_accueil.php");
		break;
	}
	
	default :{
                $data =$pdo->getderniereoffre();
		include("vues/v_accueil.php");
		break;
	}
}
?>