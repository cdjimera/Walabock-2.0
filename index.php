<?php
session_start();
ob_start();
    $var_Success="vues/v_success.php";
    require_once("include/fct.inc.php");
    require_once ("include/class.pdogsb.inc.php");
    $pdo = PdoGsb::getPdoGsb();

    if(estConnecte()){
        include("vues/v_entete.php");
    }
    else{
        include("vues/v_entete.php");
    }


    //$estConnecte = estConnecte();
    //|| !$estConnecte){

    if(!isset($_REQUEST['uc'])){     
         $_REQUEST['uc'] = 'accueil';
    }	 
    $uc = $_REQUEST['uc'];
    switch($uc)
    {
            case 'accueil':{
                    include("controleurs/c_accueil.php");
                    break;
            }

            case 'connexion':{
                    include("controleurs/c_connexion.php");
                    break;
            }

            case 'ctrlTroc' :{
                    include("controleurs/c_troc.php");
                    break;
            }

            case 'ctrlProfil' :{
                    include("controleurs/c_profil.php");
                    break;
            }

    }
    include("vues/v_pied.php") ;
ob_end_flush();
?>

