<div align="center">
	<div class="col-xs-12 col-sm-6 col-md-2">
	</div>
	<div class="col-xs-12 col-sm-6 col-md-8">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
			<div class="panel-heading"><h2>Mot de passe oublié</h2></div>
			  <div class="panel-body">
				<form method="POST" action="index.php?uc=connexion&action=ResetMdp">
					<p>
						<label>Veuillez saisir votre adresse mail :</label>
						<input type="text" name="email"  size="30" maxlength="45">
					</p>

					<p>
						<input type="submit" value="Valider" name="valider">
						<input type="reset" value="Annuler" name="annuler"> 
					</p>
				</form>
			  </div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-2">
	</div>
</div>