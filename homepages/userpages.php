<?php
session_start();
// var_dump($_SESSION['Auth_user_session']);
if (isset($_SESSION['Auth_user_session'])):
    $ID = $_SESSION['Auth_user_session']['ID'];
    $POSTE = $_SESSION['Auth_user_session']['postes'];
    $USERNAME = $_SESSION['Auth_user_session']['user_name'];
    $USERMAIL = $_SESSION['Auth_user_session']['user_mail'];
    $NOM = $_SESSION['Auth_user_session']['nom'];
    $PRENOM = $_SESSION['Auth_user_session']['prenom'];
    $TEL = $_SESSION['Auth_user_session']['tel'];
    $PROFILE = $_SESSION['Auth_user_session']['profile'];
else:
    header("Location:../login.php");
    exit;
endif;
include '../includes/header.php';
?>
<div class="confirm-deletion">
    <div class="title-conf">
        <p>
            voulez vous vraiment effectuer la supression
        </p>
    </div>
    <div class="conf-button">
        <button type="button" class="btn btn-xs btn-success">supprimer</button>
        <button type="button" class="btn btn-xs btn-success">annuler</button>
    </div>
</div>
<main class="body-separate">
    <section class="gauche">
        <?php include '../includes/options.php'; ?>
    </section>
    <section class="droite">
        <?php
$option_menu = $_GET;
switch ($_GET) {
    case isset($_GET['insert-client']):
        include '../includes/clients.php';
        break;
    case isset($_GET['insert-article']):
        include '../includes/article.php';
        break;
    case isset($_GET['insert-achat']):
        include '../includes/achat.php';
        break;
    default:
        include '../includes/clients.php';

}?>

    </section>
</main>
<script src="/js/userpage.js"></script>
<?php
include '../includes/footer.php';
?>
