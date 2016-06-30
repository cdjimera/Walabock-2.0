
<div class="modal fade" id="ConnectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">details de l'offre</h4>
</div>
<div class="modal-body">
    <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><h2 align="center">Identification utilisateur</h2></div>
                  <div class="panel-body">
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
                                <p><a href="index.php?uc=connexion&action=oublieMotDePasse">Mot de passe oublié ?</a></p>
                        </form>
                  </div>
        </div>

  </div>    
