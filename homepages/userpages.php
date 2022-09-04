<?php
session_start();
$ID = $_SESSION['Auth_user_session']['ID'];
$POSTE = $_SESSION['Auth_user_session']['postes'];
$USERNAME = $_SESSION['Auth_user_session']['user_name'];
$USERMAIL = $_SESSION['Auth_user_session']['user_mail'];
$NOM = $_SESSION['Auth_user_session']['nom'];
$PRENOM = $_SESSION['Auth_user_session']['prenom'];
$TEL = $_SESSION['Auth_user_session']['tel'];
$PROFILE = $_SESSION['Auth_user_session']['profile'];
include '../includes/header.php';
?>
<main class="body-separate">
    <section class="gauche">
        <?php include '../includes/options.php'; ?>
    </section>
    <section class="droite">
        <?php 
        $option_menu=$_GET;
        switch($option_menu){
            case $option_menu==="insertio-client":
                include '../includes/clients.php';
                break;
                case $option_menu==="insertion_article";
                break;
                default:
                include '../includes/clients.php';

        }?>

    </section>
</main>
