<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeAddAnnonce';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeAddAnnonce':{
            if(estConnecte()){
                 include("vues/v_formAddAnnonce.php");
                }
            else{
             include("vues/v_connexion.php");
                }
		break;
	}
        
        case 'listeoffre':{
		include("vues/v_offretroc.php");
		break;
	}
        
        case 'offredetails':{
            $idoffre= $_REQUEST["idoffre"];
            $complete =$pdo->getoffretroccomplete($idoffre);
		include("vues/v_offredetails.php");
		break;
	}
        
        case 'voirlesoffres':{
            
            $categorie = $_REQUEST["categorie"];
            $lesoffres =$pdo->getoffretroc($categorie);
            
            include("vues/v_troctheme.php");
            break;
	}
	
	case 'addAnnonce':{
		$categorie = $_REQUEST['categorie'];
		$libelleOffre = $_REQUEST['libelleOffre'];
		$description = $_REQUEST['description'];
                $valeur = $_REQUEST['valeur'];


                if( isset($_POST['envoi']) ) // si formulaire soumis
                {
                    $content_dir = './img/'; // dossier où sera déplacé le fichier

                    $tmp_file = $_FILES['fichier']['tmp_name'];
                    echo "rr ".$tmp_file;
                    if( !is_uploaded_file($tmp_file) )
                    {
                        exit("Le fichier est introuvable");
                    }

                    // on vérifie maintenant l'extension
                    $type_file = $_FILES['fichier']['type'];

                    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif')&& !strstr($type_file, 'png') )
                    {
                        exit("Le fichier n'est pas une image");
                    }

                    // on copie le fichier dans le dossier de destination
                    $name_file = $_FILES['fichier']['name'];

                    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
                    {
                        exit("Impossible de copier le fichier dans $content_dir");
                    }

                    echo "Le fichier a bien été uploadé";
                }
            
	  $pdo->addAnnonce($categorie,$libelleOffre,$description,$valeur,"./img/".$name_file);
          echo "L'ajout a été effetuer avec succès !";
          break;
	}
}
?>