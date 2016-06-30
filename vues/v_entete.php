<?php
    $estConnecte = estConnecte();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Walabock - Donnez une seconde vie à vos objets</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.svg" width="250" height="60"></a></h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <?php
                            if ($estConnecte)
                            {
                        ?>  
                                <li><a href="index.php?uc=ctrlTroc&action=demandeAddAnnonce">Déposer une annonce</a></li>
                        <?php
                            }
                            else
                            {
                        ?>
                              <li><a onclick="document.getElementById('btnConnect').click();">Déposer une annonce</a></li>      
                        <?php  
                               
                            }
                        ?>
                        <li><a href="index.php?uc=ctrlTroc&action=listeoffre">Voir les offres de troc</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                                if ($estConnecte){
                                    $nom = $_SESSION['nom'];
                                    $prenom = $_SESSION['prenom'];
                        ?>           
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img alt='Profil utilisateur' src='img/profil_img.PNG' width = '23' height='23'><span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                        <li><p align="center"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span> <b><u><?php  echo $nom ." ". $prenom ?></u></b></p></li>
                                                        <li role="separator" class="divider"></li>    
                                                        <li><a href="index.php?uc=ctrlProfil&action=profilUtilisateur">Profil</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="index.php?uc=connexion&action=deconnexion"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> déconnexion</a></li>
                                                </ul>
                                        </li>
                        <?php
                                }
                                else
                                {
                                        echo "<button class='btn btn-default navbar-btn' role='button' data-toggle='modal' data-target='#ConnectModal' id='btnConnect'>connexion</button>";
                                       
                                        
                        ?>
                                            
                                        <div class="modal fade" id="ConnectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="QuitConnect">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Identification utilisateur</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="panel panel-default">
                                                                    <!-- Default panel contents -->
                                                                    <div class="panel-heading"><h2 align="center">Connexion</h2></div>
                                                                      <div class="panel-body">
                                                                          <div class="formConnect">
                                                                            <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
                                                                                    <p>
                                                                                            <label for="nom">Login*</label>
                                                                                            <input id="login" type="text" name="login"  size="30" maxlength="45">
                                                                                    </p>
                                                                                    <p>
                                                                                            <label for="mdp">Mot de passe*</label>
                                                                                            <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
                                                                                    </p>
                                                                                    <p>
                                                                                            <input type="submit" value="Valider" name="valider">
                                                                                            <input type="reset" value="Annuler" name="annuler"> 
                                                                                    </p>
                                                                                    <!--<p><a href="index.php?uc=connexion&action=oublieMotDePasse">Mot de passe oublié ?</a></p>-->
                                                                                    <p><a href="#" data-toggle='modal' data-target='#OublieMdp' onclick="document.getElementById('QuitConnect').click();">Mot de passe oublié ?</a></p>
                                                                                    <p><a href="index.php?uc=connexion&action=nouveauCompte">Nouvel utilisateur</a></p> 
                                                                            </form>
                                                                          </div>
                                                                      </div>
                                                            </div>
                                                      </div> 
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="modal fade" id="OublieMdp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="QuitConnect">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Identification utilisateur</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                                        <div class="panel panel-default">
                                                                          <!-- Default panel contents -->
                                                                                <div class="panel-heading">
                                                                                    <h2 align="center">Mot de passe oublié</h2>
                                                                                </div>
                                                                                  <div class="panel-body">
                                                                                        <form method="POST" action="index.php?uc=connexion&action=ResetMdp">
                                                                                                <p>
                                                                                                        <label>Veuillez saisir votre adresse mail :</label>
                                                                                                        <input type="text" name="email"  size="30" maxlength="45">
                                                                                                </p>

                                                                                                <p align="center">
                                                                                                        <input type="submit" value="Valider" name="valider">
                                                                                                        <input type="reset" value="Annuler" name="annuler"> 
                                                                                                </p>
                                                                                        </form>
                                                                                  </div>
                                                                        </div>
                                                                
                                                      </div> 
                                                </div>
                                            </div>
                                        </div>
                                        
                        <?php
                                }
                        ?>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->