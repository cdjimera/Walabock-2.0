<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Walabock-Acceuil</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
</head>

<body>

<!-- Contenu principal -->
<h1><a href="index.php">Walabock</a></h1>
<h4>Donnez une seconde vie à vos objets</h4>
<hr>
<div align="right">
	<a href="index.php?uc=connexion&action=demandeConnexion" class="btn btn-default" role="button">connexion</a>
</div>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Accueil</a></li> <!--class="active"-->
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     Troc <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li><a href="index.php?uc=ctrlTroc&action=demandeAddAnnonce">Déposer une annonce</a></li>
    </ul>
  </li>
  <li role="presentation"><a href="#">Prêt</a></li>
</ul>