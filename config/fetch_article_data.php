<?php
require_once '../db_linking/connect.php';
$mysqli = conn();
$id = 0;
function listing_arti()
{
    try {
        $result = $GLOBALS['mysqli']->query("SELECT * FROM articles ");
        if ($result->num_rows):
            while ($row = $result->fetch_all(MYSQLI_ASSOC)) {
                return $row;
            }
        else:
            echo "<div class='empty_msg'>
    <p> Aucune article en stock</p>
</div>";
        endif;
    }
    catch (Exception $e) {
        die('Erreur ;' . $e->getMessage());
    }
}

function save_article($Num_a, $Nom_a, $Prix, $QTE, $Desc)
{
    try {
        $ID = $GLOBALS['id'];
        if ($statement = $GLOBALS['mysqli']->prepare("INSERT INTO articles
(ID,NUM_A,NOM_A,DESCRIPTION,PRIX,QUANTITE) VALUES (?,?,?,?,?,?)")):
            $statement->bind_param("ssssss", $ID, $Num_a, $Nom_a, $Desc, $Prix, $QTE);
            if ($statement->execute()):
                $GLOBALS['SUCCES'] = "
<div class='alert alert-success'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <p>
        Enregistrement effectuer avec succes
    </p>
</div>";
            else:
                $GLOBALS['FAILD'] = "
<div class='alert alert-warning'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <p>
        Enregistrement echouer
    </p>
</div>";
            endif;
        else:
            echo "Echec lors de la preparation de la requette suivant : (" . $GLOBALS['mysqli']->errno . ")" . $GLOBALS['mysqli']->error;
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
function search_art($NO_art)
{
    try {
        $result = $GLOBALS['mysqli']->query("SELECT * FROM clients WHERE NOCLIENTS='$NO_art'");
        if ($result->num_rows):
            while ($row = $result->fetch_assoc()) {
                $_SESSION['search_result'] = array(
                    'id' => $row['ID'],
                    'num_A' => $row['NUM_A'],
                    'nom_A' => $row['NOM_A'],
                    'desc_A' => $row['DESCRIPTION'],
                    'prix_A' => $row['PRIX'],
                    'qte_A' => $row['QUANTITE'],
                );
                return $_SESSION['search_result_'];
            }
        else:
            $GLOBALS['ERROR_MSG'] = "<div class='alert alert-info'><p> Aucune article de ce numero ( <span style='color:red;'>$NO_art</span>)  n'est trouve</p></div>";
            $_SESSION['search_result'] = '';
            return $_SESSION['search_result'];
        endif;
    }
    catch (Exception $e) {
        die('Erreur ;' . $e->getMessage());
    }
}

// function listing_cli()
