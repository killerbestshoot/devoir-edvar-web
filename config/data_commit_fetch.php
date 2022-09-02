<?php
require_once '../db_linking/connect.php';
$mysqli = conn();
function listing_cli()
{
    try {
        $result = $GLOBALS['mysqli']->query("SELECT * FROM clients ");
        if ($result->num_rows):
            while ($row = $result->fetch_assoc()) {
                $_SESSION['cli_listing'] = array(
                    'id' => $row['ID'],
                    'cli_num' => $row['NOCLIENTS'],
                    'cli_name' => $row['NOM'],
                    'cli_fname' => $row['PRENOM'],
                    'cli_sex' => $row['SEXE'],
                    'cli_birth' => $row['DATENAISSANCE'],
                    'cli_codepostal' => $row['CODEPOSTAL'],
                    'cli_ville' => $row['VILLE'],
                    'cli_pays' => $row['PAYS'],
                    'cli_adr' => $row['ADDRESSE'],
                    'cli_tel' => $row['TELEPHONE']
                );
                return $_SESSION['cli_listing'];
            }
        else:
            echo "<div class='empty_msg'><p> Aucune client a afficher</p></div>";
        endif;
    }
    catch (Exception $e) {
        die('Erreur ;' . $e->getMessage());
    }
}

function save_client($cli_num, $cli_name, $cli_fname, $cli_sex, $cli_birth, $cli_codepostal, $cli_ville, $cli_pays, $cli_adr, $cli_tel)
{
    try {
        $ID = $GLOBALS['id'];
        if ($statement = $GLOBALS['mysqli']->prepare("INSERT INTO clients (ID,NOCLIENTS,NOM,PRENOM,SEXE,DATENAISSANCE,ADDRESSE,CODEPOSTAL,VILLE,PAYS,TELEPHONE) VALUES (?,?,?,?,?,?,?,?,?,?,?)")):
            $statement->bind_param("sssssssssss", $ID, $cli_num, $cli_name, $cli_fname, $cli_sex, $cli_birth, $cli_adr, $cli_codepostal, $cli_ville, $cli_pays, $cli_tel);
            if ($statement->execute()):
                echo "<div class='succes_msg'><p>Enregitrement effectuer avec succes</p></div>";
            else:
                $GLOBALS['ERROR_MSG'] = "Enregistrer du client echouer";
            endif;
        else:
            echo "Echec lors de la preparation de la requette suivant : (" . $mysqli->errno . ")" . $mysqli->error;
        endif;
        $GLOBALS['mysqli']->close();
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
function supp_cli($cli_num)
{
    try {
        if ($GLOBALS['mysqli']->query("DELETE FROM clients WHERE NOCLIENTS='$cli_num'") === TRUE):
            echo "<div class='succes_msg'><p>Enregitrement effectuer avec succes</p></div>";
        else:
            $GLOBALS['ERROR_MSG'] = "La suppresion a echouer, une erreur s'est produite";
        endif;
        $GLOBALS['mysqli']->close();
    }
    catch (Exception $e) {
        die('Erreur ;;' . $e->getMessage());
    }
}
