<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-2">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
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
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="panel panel-default">
			  <!-- Default panel contents -->
				<div class="panel-heading"><h2 align="center">Nouvelle utilisateur</h2></div>
				<div class="panel-body">
					<p align="center"><a href="index.php?uc=connexion&action=nouveauCompte" class="btn btn-primary" role="button">Créer mon compte</a></p>
				</div>
		</div>	
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-2">
	</div>
</div>