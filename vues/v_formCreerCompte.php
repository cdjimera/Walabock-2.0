<div class="formAtCenter">
    <h3> Création d'un compte </h3>
    <div>
            <form id="frmNouvUtilisateur" method ="post" action ="index.php?uc=connexion&action=addNewCompte" name="frmNouvUtilisateur" onsubmit="return verifForm(this)">
             <div class="form-group">
                <label for="sexe">Sexe</label>
                <INPUT type= "radio" name="sexe" value="H" required> Homme <INPUT type= "radio" name="sexe" value="F"> Femme
             </div>
             <div class="form-group">
                    <label for="login">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
             </div>

             <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
             </div>

             <div class="form-group">
                    <label>Date de naissance</label>
                    <input type="text" class="form-control" id="dateNaiss" name="dateNaiss" onblur="verifDate(this)" placeholder="jj/mm/aaaa" required>
             </div>   


             <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
             </div>

             <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="mdp" required>
             </div>

            <div class="form-group">
                <label for="password">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="confirmPassword" name="ConfirmMdp" placeholder="Veuillez ressaisir votre mot de passe" required>
            </div>
            <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
            </div>


             <div class="form-group">
                    <label for="code">Tel</label>
                    <input type="tel" class="form-control" id="tel" name="tel" onblur="verifTel(this)" required>
             </div>

            <div align="center">
                <button type="submit" class="btn btn-primary">M'inscrire</button>
            </div>
                
            </form>
    </div>
</div>
    <script>
        function surligne(champ, erreur)
        {
           if(erreur)
              champ.style.backgroundColor = "#fba";
           else
              champ.style.backgroundColor = "";
        }

        function verifTel(champ)
        {
           var regex = /^[0-9]{10,12}$/;

           if(!regex.test(champ.value))
           {
              surligne(champ, true);
              return false;
           }
           else
           {
              surligne(champ, false);
              return true;
           }
        }

        function verifDate(champ)
        {
           var regex = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;

           if(!regex.test(champ.value))
           {
              surligne(champ, true);
              return false;
           }
           else
           {
              surligne(champ, false);
              return true;
           }
        }

        function verifForm(f)
        {
           var telOk = verifTel(f.tel);
           var mdpOK = false;
           var dateNaissOk = verifDate(f.dateNaiss)
           if(f.password.value == f.confirmPassword.value)
           {
              mdpOK = true;
           }
           else
           {
               surligne(f.confirmPassword, true);
           }

           if(telOk && mdpOK && dateNaissOk)
           {
              return true;
           }
           else
           {
              alert("Veuillez remplir correctement tous les champs");
              return false;
           }
        }
    </script>