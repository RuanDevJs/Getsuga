<?php
  require_once './assets/components/header_admin.php';
  require_once '../Controller/UserController.php';
  $produtos = UserController::showPosts();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Posts</title>
</head>

<section class="product">
  <div class="product-container">
    <?php
      foreach($produtos as $item)
      echo
      '
        <div>
          <h1>'. $item["nome"] .'</h1>
          <p>'. $item["descricao"] .'</p>
          <img src="'. $item["url"].'"/>
          <h2>'. $item["byUser"]. '</h2>
          <a href="./apagar_admin.php?id='.$item["id"].'">Apagar</a>
        </div>
      '
    ?>
  </div>
</section>