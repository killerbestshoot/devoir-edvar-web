<?php
require_once '../config/data_commit_fetch.php';
if (isset($_POST['ajouter'])):
    if (!empty($_POST['cli-name']) || !empty($_POST['cli-fname']) || !empty($_POST['cli-birth']) || !empty($_POST['cli-adr']) || !empty($_POST['cli-tel']) ||
    !empty($_POST['cli-ville']) || !empty($_POST['cli-pays'])):
        $id = 0;
        $cli_name = htmlspecialchars($_POST['cli-name']);
        $cli_fname = htmlspecialchars($_POST['cli-fname']);
        $cli_sex = htmlspecialchars($_POST['cli-sex']);
        $cli_birth = htmlspecialchars($_POST['cli-birth']);
        $cli_codepostal = htmlspecialchars($_POST['cli-cp']);
        $cli_ville = htmlspecialchars($_POST['cli-ville']);
        $cli_pays = htmlspecialchars($_POST['cli-pays']);
        $cli_adr = htmlspecialchars($_POST['cli-adr']);
        $cli_tel = htmlspecialchars($_POST['cli-tel']);
        $cli_num = substr($cli_name, 0, 3) . "-" . rand(100000, 1000000);
        save_client($cli_num, $cli_name, $cli_fname, $cli_sex, $cli_birth, $cli_codepostal, $cli_ville, $cli_pays, $cli_adr, $cli_tel);
    else:
        $GLOBALS['ERROR_MSG'] = "tout les champs sont obligatoires";
    endif;
elseif (isset($_POST['effacer'])):
    if (!empty($_POST['cli-name']) || !empty($_POST['cli-fname']) || !empty($_POST['cli-birth']) || !empty($_POST['cli-adr']) || !empty($_POST['cli-tel']) || !empty($_POST['cli-ville']) || !empty($_POST['cli-pays'])):
        $cli_num = listing_cli()['cli_num'];
        supp_cli($cli_num);
    else:
        $GLOBALS['ERROR_MSG'] = "impossible de supprimer";
    endif;
endif;
?>
<div>
    <?php
if (isset($ERROR_MSG)):
    echo "
    <div>
        <p>
        $ERROR_MSG
        </p>
    </div>
    ";
endif;

$id = 0;
$cli_name = "";
$cli_fname = "";
$cli_sex = "";
$cli_birth = "";
$cli_codepostal = "";
$cli_ville = "";
$cli_pays = "";
$cli_adr = "";
$cli_tel = "";
$cli_num = "";
?>
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
        <input type="text" name="cli-birth" id="cli-birth" placeholder="AAAA-MM-dd">
        <label for="cli-adr">Address client</label>
        <input type="text" name="cli-adr" id="cli-adr" placeholder="29 rue les anges">
        <label for="cli-cp">Code Postale</label>
        <input type="text" name="cli-cp" id="cli-cp" placeholder="HT-7010">
        <label for="cli-ville">Ville</label>
        <input type="text" name="cli-ville" id="cli-ville" placeholder="Port-au-prince">
        <label for="cli-pays">Pays</label>
        <input type="text" name="cli-pays" id="cli-pays" placeholder="Haiti">
        <label for="cli-tel">Telephone du client</label>
        <input type="text" name="cli-tel" id="cli-tel">
        <input type="submit" value="effacer" name="effacer">
        <input type="submit" value="Ajouter" name="ajouter">
    </form>
</div>
