<?php
session_start();
$ID= $_SESSION['Auth_user_session']['ID'];
$POSTE=$_SESSION['Auth_user_session']['postes'];
$USERNAME=$_SESSION['Auth_user_session']['user_name'];
$USERMAIL=$_SESSION['Auth_user_session']['user_mail'];
$NOM=$_SESSION['Auth_user_session']['nom'];
$PRENOM=$_SESSION['Auth_user_session']['prenom'];
$TEL=$_SESSION['Auth_user_session']['tel'];
                   
include '../includes/header.php';
?>
<main>
    <section class="gauche">
        <?php include '../includes/options.php'; ?>
    </section>
    <section class="droite">

    </section>
</main>
