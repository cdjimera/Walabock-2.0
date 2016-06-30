<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'profilUtilisateur';
}
$action = $_REQUEST['action'];
include("vues/v_navProfil.php");

switch($action){
        case 'profilUtilisateur':{
                $idUtilisateur = $_SESSION['idUtilisateur'];
                $DonneesUtilisateur = $pdo->getAllInfoUser($idUtilisateur);
                include("vues/v_profil.php");
		break;
	}
}
?>

