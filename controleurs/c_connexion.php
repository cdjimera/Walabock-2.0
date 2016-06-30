<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	
	case 'nouveauCompte':{
		include("vues/v_formCreerCompte.php");
		break;
	}
        
        case 'ResetMdp':{
                $email = $_REQUEST['email'];
		$mailExist = $pdo->verifMail($email);
                
                if($mailExist)
                {
                    echo'ok';
                }
                else{
                    ajouterErreur("Qui est-tu fdp ? c'est la question que je pose, la simplicité c'est de tuer qui s'oppose !!");
                    include("vues/v_erreurs.php");
                    include("vues/v_oublieMotDePasse.php");
                }
		break;
	}
        
	case 'oublieMotDePasse':{
		include("vues/v_oublieMotDePasse.php");
		break;
	}
	
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];

                $utilisateur = $pdo->getInfosUtilisateur($login,$mdp);
		if(!is_array($utilisateur))
                {
                   $gestionnaire=$pdo->getInfosGestionnaire($login, $mdp);
                   if(!is_array( $gestionnaire))
                       {
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
                        
                        }
                   else 
                   {
                        $nom =  $gestionnaire['nom'];
                        $prenom = $gestionnaire['prenom'];
                        connecteradmin($nom,$prenom);
                        include("vues/v_admin.php");
                   }
		}
		else{
                    
                        $id = $utilisateur['id'];
                        $nom =  $utilisateur['nom'];
                        $prenom = $utilisateur['prenom'];
                        connecter($id,$nom,$prenom);
                        
                        header('Location: index.php');
                    
		}
		break;
	}
        case 'deconnexion':{
                deconnecter();
                header('Location: index.php');
		break;
	}
        case 'addNewCompte':{
                $nom =  $_REQUEST['nom'];
                $prenom =  $_REQUEST['prenom'];
                $sexe =  $_REQUEST['sexe'];
                $dateNaiss =  $_REQUEST['dateNaiss'];
                $login =  $_REQUEST['login'];
                $mdp =  $_REQUEST['mdp'];
                $email =  $_REQUEST['email'];
                $tel =  $_REQUEST['tel'];
                
                
                $pdo->addUtilisateur($login,$mdp,$sexe,$nom,$prenom,$dateNaiss,$email,$tel);
                
                $ss="C";
                include($var_Success);
                //header("Location: index.php?uc=connexion&action=valideConnexion&login=$login&mdp=$mdp");
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>