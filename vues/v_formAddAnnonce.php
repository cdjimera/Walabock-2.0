<div class="formAtCenter">
    <h3> Déposer une annonce de troc </h3>

    <form  method ="POST" action="index.php?uc=ctrlTroc&action=addAnnonce" enctype="multipart/form-data">




        <label for="categorie">Catégorie</label>
        <select class="form-control" name ="categorie">
            <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("walabock");


            $reponse = mysql_query("select * from categorie");
            while($donnees=  mysql_fetch_array($reponse)){
                ?>
            }
        <option value="<?php echo $donnees['idCategorie'] ?>"><?php echo $donnees['libelleCat'] ?></option>
        <?php
            }
            ?>
        </select><br>

        <label for="nom">Nom de l'objet</label>
        <input type="text" class="form-control" name="libelleOffre" ><br>

        <fieldset class="form-group">
         <label for="description">Description</label>
            <textarea class="form-control" name ="description" rows="3"></textarea>
        </fieldset>

        <label for="valeur">Valeur</label>
        <input type="text" class="form-control" name="valeur"><br>



        <label>Image</label> 
        <input type="file" name="fichier"><br>


    <input class="btn btn-ar btn-primary" type="submit" name="envoi" value="Déposer">
    <input class="btn btn-ar btn-primary" type="reset" name="Reset" value=" Effacer ">



    </form>
</div>