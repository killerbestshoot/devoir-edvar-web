<?php
session_unset();
if (isset($_POST['valider'])):
    if (empty($_POST['user_name']) || empty($_POST['user_pass'])):
        $error_msg = "Veuillez remplir tout les champs";
    elseif (strlen($_POST['user_name']) <= 10 || strlen($_POST['user_pass']) <= 8):
        $error_msg = "Nom utilisateur et/ou Mot de passe invalide";
    else:
        require 'config/auth.php';
    endif;
endif;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles-connectionphp.css">
    <title>Administrateur</title>
</head>

<body>
    <main class="content">
        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p></strong>Attention !</strong> rentrer vos identifiants Administrateur, Sinon retourner a la page de <a
                    href="../login.php" class="alert-link">connection</a></p>
        </div>
        <form method="post">
            <div class="connection">
                <div class="title">
                    <h2>Connection Administrateur</h2>
                </div>
                <?php
if (isset($error_msg)) {
    echo "<p class='alert alert-danger'>" . $error_msg . "</p>";
}
?>
                <div class="champ-texte">
                    <input type="text" class="form-control" name="user_name" id="usernames" placeholder="Ex: Doe_2022"
                        required />
                    <input type="password" class="form-control" name="user_pass" id="userpasswords" autocomplete="off"
                        placeholder="************" required />
                </div>
                <input type="submit" class="btn btn-primary" value="valider" name="valider" />
            </div>
        </form>
    </main>
</body>

</html>
