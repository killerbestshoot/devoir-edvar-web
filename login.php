<?php
session_unset();
session_start();
$is_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0');
if (isset($_POST['valider'])):
  $_SESSION['session_fields_data'] = array(
    'user_name' => $_POST['user_name'],
    'user_pass' => $_POST['user_pass'],
  );
  if (empty($_POST['user_name']) || empty($_POST['user_pass'])):
    $error_msg = "Veuillez remplir tout les champs";
  elseif (strlen($_POST['user_name']) <= 9 && strlen($_POST['user_pass']) <= 7):
    $error_msg_small_pass = "le mot de passe doit faire 8 characters minimum";
    $error_msg_small_login = "le nom utilisateur doit faire 10 characters minimum";
  elseif (strlen($_POST['user_name']) <= 9 || strlen($_POST['user_pass']) <= 7):
    if (strlen($_POST['user_name']) <= 9):
      $error_msg_small_login = "le nom utilisateur doit faire 10 characters minimum";
    elseif (strlen($_POST['user_pass']) <= 7):
      $error_msg_small_pass = "le mot de passe doit faire 8 characters minimum";
    endif;
  else:
    require 'config/auth.php';
  endif;
endif;
if (isset($_SESSION['session_fields_data'])):
  $username = $_SESSION['session_fields_data']['user_name'];
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesconn.css">
  <link rel="shortcut icon" href="/images/gif/Plezi_Shipping.gi" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Plezi shippinng | Page de Connection</title>
</head>

<body>
  <div class="loader">
    <div class="load"></div>
  </div>
  <main class="content">
    <form method="post">
      <div class="connection">
        <div class="title">
          <h2>Connection</h2>
        </div>
        <?php

if (isset($error_msg)):
  echo "<p class='alert alert-danger'>" . $error_msg . "</p>";
endif;
?>
        <div class="champ-texte">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="user_name" id="usernames"
            placeholder="Ex: Doe_2022" value='<?= isset($username) ? 
  $username : ''; ?>' required />
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
  <script src="/js/log.js"></script>
</body>

</html>

</html>
