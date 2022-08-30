<?php
$data_base_name = 'Bonbagay';
$server_name = 'localhost';
$db_username = 'root';
$db_password = 'Bastien98';
function conn()
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $mysqli = new mysqli($GLOBALS['server_name'], $GLOBALS['db_username'], $GLOBALS['db_password'], $GLOBALS['data_base_name']);
        $mysqli->set_charset("utf8");

    }
    catch (Exception $e) {
        if ($e->getCode() === 2002):
            die('Erreur de connection la base de donnee a refuser la connection et retourne une erreur ' . $e->getCode());
        endif;
    }
    return $mysqli;
}
?>
