<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=walabock';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoGsb=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
		PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
 
 * @return l'unique objet de la classe PdoGsb
 */
	public  static function getPdoGsb(){
		if(PdoGsb::$monPdoGsb==null){
			PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;  
	}
/**
 * Retourne les informations d'un visiteur
 
 * @param $login 
 * @param $mdp
 * @return l'id, le nom et le prénom sous la forme d'un tableau associatif 
*/      
        
        
        public function getAllInfoUser($idUtilisateur){
		$req = "select utilisateur.id as id, utilisateur.nom as nom, utilisateur.prenom as prenom, utilisateur.dateNaiss as dateNaiss, utilisateur.mail as mail, utilisateur.tel as tel from utilisateur
		where utilisateur.id=:id";
                
                $stmt=PdoGsb::$monPdo->prepare($req);
                //$idUtilisateur=$_REQUEST['idUtilisateur'];
                $stmt->bindParam(':id',$idUtilisateur);
                $stmt->execute();
                $ligne= $stmt->fetch();
		return $ligne;
	}
        
        
        public function verifMail($email){
		$mailExist = false;
                $req = "select count(*) as nb from utilisateur where utilisateur.mail =:mail";   
                $stmt=PdoGsb::$monPdo->prepare($req);

                $stmt->bindParam(':mail',$email);
                $stmt->execute();
                $verif = $stmt->fetch();
                
                if ($verif['nb'] > 0){
                   $mailExist = true;
                }
                
                return $mailExist;
	}
        
        
        public function getoffretroc($categorie) {
        $req = "SELECT offretroc.idoffre, offretroc.image, offretroc.libelleOffre,utilisateur.login,offretroc.valeur,categorie.libelleCat 
		FROM offretroc 
		INNER JOIN utilisateur ON offretroc.idUtilisateur = utilisateur.id 
		INNER JOIN categorie on offretroc.idCategorie = categorie.idCategorie 
		WHERE categorie.libellecat = '$categorie'";
        
        $res = PdoGsb::$monPdo->query($req);
        $lignes = $res->fetchAll();
        return $lignes;
        }
        
        public function getderniereoffre() {
            $req = "SELECT offretroc.idoffre, offretroc.image, offretroc.libelleOffre
                    FROM offretroc 
                    order by offretroc.idoffre desc";

            $res = PdoGsb::$monPdo->query($req);
            $lignes = $res->fetchAll();
            return $lignes;
        }
        
        public function getoffretroccomplete($idoffre) {
        $req = "SELECT offretroc.idoffre, offretroc.image, offretroc.libelleOffre, offretroc.valeur, utilisateur.login,categorie.libelleCat, offretroc.descriptif   
FROM offretroc INNER JOIN utilisateur ON offretroc.idUtilisateur = utilisateur.id
INNER JOIN categorie on offretroc.idCategorie = categorie.idCategorie
WHERE offretroc.idoffre = '$idoffre'";
        
        $res = PdoGsb::$monPdo->query($req);
        $lignes = $res->fetchAll();
        return $lignes;
        }
        
        
        public function getInfosUtilisateur($login, $mdp){
		$req = "select utilisateur.id as id, utilisateur.nom as nom, utilisateur.prenom as prenom from utilisateur 
		where utilisateur.login=:login and utilisateur.mdp=:mdp";
                
                $stmt=PdoGsb::$monPdo->prepare($req);
                $login=$_REQUEST['login'];
                $mdp=$_REQUEST['mdp'];
                $stmt->bindParam(':login',$login);
                $stmt->bindParam(':mdp',$mdp);
                $stmt->execute();
                $ligne= $stmt->fetch();
//		$rs = PdoGsb::$monPdo->query($req);
//		$ligne = $rs->fetch();
		return $ligne;
	}
        
        	public function getInfosGestionnaire($login, $mdp){
		$req2 = "select gestionnaire.id as id, gestionnaire.nom as nom, gestionnaire.prenom as prenom from gestionnaire 
		where gestionnaire.login=:login and gestionnaire.mdp=:mdp";
                $stmt=PdoGsb::$monPdo->prepare($req2);
                $login=$_REQUEST['login'];
                $mdp=$_REQUEST['mdp'];
                $stmt->bindParam(':login',$login);
                $stmt->bindParam(':mdp',$mdp);
                $stmt->execute();
                $ligne2 = $stmt->fetch();
                
                
//		$rs2 = PdoGsb::$monPdo->query($req2);
//		$ligne2 = $rs2->fetch();
		return $ligne2;
	}
        
	public function addUtilisateur($login,$mdp,$sexe,$nom,$prenom,$dateNaiss,$email,$tel){
		
            $req = "insert into utilisateur (nom,prenom,sexe,dateNaiss,mail,login,mdp,tel)
            Values ('$nom','$prenom','$sexe','$dateNaiss','$email','$login','$mdp','$tel')";
            PdoGsb::$monPdo->exec($req);
	}
        
        // a revoir
        public function addAnnonce($categorie,$libelleOffre,$description,$valeur,$monfichier)
        {
            $nom = $_SESSION['idUtilisateur'];
            $req = "insert into offretroc (libelleOffre,descriptif,valeur,idCategorie,idUtilisateur,image,publie) values('$libelleOffre','$description','$valeur','$categorie','$nom','$monfichier',false)";
            PdoGsb::$monPdo->exec($req);
              
        }

}
?>