 <div class="hc aps">
    <!-- entete -->
    <div class="apa">
      <div class="apb">
        <h6 class="apd">Profil</h6>
        <h2 class="apc">Mon compte</h2>
      </div>
    </div>
    <div class="anv alg ala">
      <h3 class="anw anx">Informations personnelles</h3>
    </div>

    <div class="fu apt">
        
        <div class="form-group">
                <label for="login">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $DonneesUtilisateur['nom']; ?>" disabled>
        </div>

        <div class="form-group">
                <label>Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $DonneesUtilisateur['prenom']; ?>" disabled>
        </div>

        <div class="form-group">
                <label>Date de naissance</label>
                <input type="dateNaiss" class="form-control" id="dateNaiss" name="dateNaiss" value="<?php echo $DonneesUtilisateur['dateNaiss']; ?>" disabled>
        </div>
    </div>
    
    <div class="anv alg ala">
      <h3 class="anw anx">Coordonnées</h3>
    </div>
    <div class="fu apt">
        <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $DonneesUtilisateur['mail']; ?>" disabled>
        </div>


        <div class="form-group">
                <label for="tel">Tel</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="<?php echo $DonneesUtilisateur['tel']; ?>" disabled>
        </div>
        
    </div>
    <hr class="aky">
 </div>
      
      