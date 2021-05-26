<?php
  require_once './assets/components/header_auth.php';
  require_once '../Controller/UserController.php';
  if(!isset($_SESSION["user_data"])){
    header('location: index.php');
  }
  $produtos =  $_SESSION["produtos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Home</title>
</head>
<body>
<div class="intro-container">
     <?php
          echo '<img src="./assets/img/tesla-2020.svg" data-opacity="0"/>';
          echo '<h1 data-opacity="0">'. $produtos["nome"]. '</h1>';
          echo '<p data-opacity="0">'. $produtos["descricao"]. '.</p>';
     ?>
    </div>

    <div class="produtos">
      <div>
      <?php
          echo '<img src="'.$produtos['url'].'"data-opacity="0"/>';
          echo '<h1 data-opacity="0">'. $produtos["nome"]. '</h1>';
          echo '<p data-opacity="0">'. $produtos["descricao"]. '.</p>';
     ?>
      </div>

      <div>
      <?php
          echo '<img src="'.$produtos['url'].'"data-opacity="0"/>';
          echo '<h1 data-opacity="0">'. $produtos["nome"]. '</h1>';
          echo '<p data-opacity="0">'. $produtos["descricao"]. '.</p>';
     ?>
      </div>
    </div>

    <script src="./assets/script/script.js"></script>
</body>
</html>