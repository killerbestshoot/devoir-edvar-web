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
    <link rel="stylesheet" href="styles/styles-connectionphp.css">
    <title>Connection</title>
</head>
<body>
    <main class="content">
        <form method="post">
            <div class="connection">
                <div class="title">
                    <h2>Connection</h2>
                </div>
            <?php
if (isset($error_msg)) {
    echo "<p class='error'>" . $error_msg . "</p>";
}
?>
          <div class="champ-texte">
            <input
              type="text"
              class="champtxt"
               name="user_name"
                id="usernames"
              placeholder="Ex: Doe_2022"
              required
            />
            <input
              type="password"
              class="champtxt"
              name="user_pass" id="userpasswords" autocomplete="off"
              placeholder="************"
              required
            />
          </div>
          <input
            type="submit"
            class="validder"
            value="valider"
            name="valider"
          />
        </div>
      </form>
      <div class="create_account">
        <p>Don't have <a href="pages/account/createaccount.php">account</a></p>
      </div>
    </main>
</body>
</html>
