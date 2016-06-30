<?php
    $text="";
    $retour="";
    //C = connexion
    //T = Troc
    //P = Profil
    switch ($ss)
    {
        case "C":{
            $text="<strong>Bienvenue!</strong> Vous pouvez à présent troquer à votre guise.";
            $retour= "index.php?uc=connexion&action=demandeConnexion";
            break;
	}
        
    }
?>

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php
    echo $text;
  ?>
</div>
<br><br><br><br>
<div align="center">
    <h4><a href="<?php echo $retour; ?>"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> </span> Retour</a></h4>
</div>