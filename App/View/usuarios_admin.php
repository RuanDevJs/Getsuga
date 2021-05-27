<?php
  require_once './assets/components/header_admin.php';
  require_once '../Controller/UserController.php';
  $usuarios =  $_SESSION['usuarios_admin'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Usuarios</title>
</head>

<section class="users">
  <div class="users-container">
    <?php
      foreach($usuarios as $item)
      echo
      '
        <div>
          <h1>'. $item["name"] .'</h1>
          <p>'. $item["email"] .'</p>
          <h2>'. $item["password"]. '</h2>
          <a href="./apagar_user.php?id='.$item["id"].'">Apagar</a>
        </div>
      '
    ?>
  </div>
</section>