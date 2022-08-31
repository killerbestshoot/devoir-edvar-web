<?php
require '../db_linking/connect.php';
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

function save_client($cli_num, $cli_name, $cli_fname, $cli_sex, $cli_birth, $cli_codepostal, $cli_ville, $cli_pays, $cli_adr, $cli_tel)
{
    try {
        $ID = $GLOBALS['id'];
        $mysqli = conn();
        if ($statement = $mysqli->prepare("INSERT INTO clients (ID,NOCLIENTS,NOM,PRENOM,SEXE,DATENAISSANCE,ADDRESSE,CODEPOSTAL,VILLE,PAYS,TELEPHONE) VALUES (?,?,?,?,?,?,?,?,?,?,?)")):
            $statement->bind_param("sssssssssss", $ID, $cli_num, $cli_name, $cli_fname, $cli_sex, $cli_birth, $cli_adr, $cli_codepostal, $cli_ville, $cli_pays, $cli_tel);
            if ($statement->execute()):
                echo "<div class='succes_msg'><p>Enregitrement effectuer avec succes</p></div>";
            else:
                $GLOBALS['ERROR_MSG'] = "Enregistrer du client echouer";
            endif;
        else:
            echo "Echec lors de la preparation de la requette suivant : (" . $mysqli->errno . ")" . $mysqli->error;
        endif;
        $mysqli->close();
    }
    catch (Exception $e) {
        switch ($e) {
            case $e->getCode() === 2006:
                die('le server n\'pas repondu a la requette et a retourner le code suivant (' . $e->getCode() . ')');
            case $e->getCode() === 1452:
                die('violation de containte (' . $e->getCode() . ')');
            default:
                die('Erreur 1: ' . $e->getMessage() . $e->getCode());
        }
    }
}
