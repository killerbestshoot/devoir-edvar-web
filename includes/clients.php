<?php
if(isset($_POST[´ajouter´],$_POST[´effacer´])):
   if(!empty($_POST[´cli-name´]) || !empty($_POST[´cli-fname´]) || !empty($_POST[´cli-sex´]) ||  !empty($_POST[´cli=birth´]) || !empty($_POST[´cli-adr´]) || !empty($_POST[´cli-tel´]) ):
   $GLOBALS[´ERROR_MSG´]=´tout les champs sont obligatoires´;
   else:
   
   endif;
endif;
   ?>
<div>
    <div>
        <h2>Clients</h2>
    </div>
    <form method="post">
        <label for="client-name">Nom du client</label>
        <input type="text" name="cli-name" id="cli-name" placeholder="Ex : Jhon">
        <label for="cli-fname">Prenom du client</label>
        <input type="text" name="cli-fname" id="cli-fname" placeholder="Doe">
        <label for="cli-sex">Sexe du client</label>
        <select name="cli-sex" id="cli-sex">
            <option value="Masculin"></option>
            <option value="Feminin"></option>
        </select>
        <label for="cli-birth">Date de Naissance</label>
        <input type="text" name="cli-birth" id="cli-birth" placeholder="01/01/2022">
        <label for="cli-adr">Address> client</label>
        <input type="text" name="cli-adr" id="cli-adr" placeholder="29 rue les anges">
        <label for="cli-tel">Telephone du client</label>
        <input type="text" name="cli-tel" id="cli-tel">
        <input type="submit" value="effacer">
        <input type="submit" value="Ajouter">
    </form>
</div>
