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
