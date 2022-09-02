<?php
session_unset();
if (isset($_POST['valider'])):
  if (empty($_POST['user_name']) || empty($_POST['user_pass'])):
    $error_msg = "Veuillez remplir tout les champs";
  elseif (strlen($_POST['user_name']) <= 10 || strlen($_POST['user_pass']) <= 8):
    if (strlen($_POST['user_name']) <= 10):
      $error_msg_small_login = "le nom d'ulisateur ne remplit pas les condition";
    elseif (strlen($_POST['user_pass']) <= 8):
      $error_msg_small_pass = "le mot de passe ne remplit pas les conditions";
    endif;
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
  <link rel="stylesheet" href="stylesconn.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Plezi shippinng | Page de Connection</title>
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
  echo "<p class='alert alert-danger'>" . $error_msg . "</p>";
}
?>
        <div class="champ-texte">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="user_name" id="usernames"
            placeholder="Ex: Doe_2022" required />
          <?php if (isset($error_msg_small_login)):
  echo "<small>$error_msg_small_login</small>";
endif;
?>
          <label for="passs-w">Password</label>
          <input type="password" class="form-control" id="passs-w" name="user_pass" id="userpasswords"
            autocomplete="off" placeholder="************" required />
          <?php if (isset($error_msg_small_pass)):
  echo "<small>$error_msg_small_pass</small>";
endif;
?>
        </div>
        <input type="submit" class="btn btn-primary" value="valider" name="valider" />
      </div>
    </form>
  </main>
</body>

</html>
