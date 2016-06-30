<div id="contenu">
    <h3>Mois des fiches de Frais : </h3>
    <form action="index.php?uc=gestion&action=afficherFiche" method="post">
        <div class="corpsForm">
        <p>
            <label for="lstMois" accesskey="n">Mois : </label>
            <SELECT name="mois" size="1">
                <OPTION value="201401">Janvier</OPTION>
                <OPTION value="201402">Fevrier</OPTION>
                <OPTION value="201403">Mars</OPTION>
                <OPTION value="201404">Avril</OPTION>
                <OPTION value="201405">Mai</OPTION>
                <OPTION value="201406">Juin</OPTION>
                <OPTION value="201407">Juillet</OPTION>
                <OPTION value="201408">Aout</OPTION>
                <OPTION value="201409">Septembre</OPTION>
                <OPTION value="201410">Octobre</OPTION>
                <OPTION value="201411">Novembre</OPTION>
                <OPTION value="201412">Decembre </OPTION>                          
            </SELECT>
        </p>
        </div>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" >
                <input id="annuler" type="reset" value="Effacer" size="20" >
            </p> 
        </div>
    </form>