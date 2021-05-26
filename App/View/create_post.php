<?php
  require_once './assets/components/header_auth.php';
  require_once '../Controller/UserController.php';
  if(!isset($_SESSION["user_data"])){
    header('location: index.php');
  }
  $produtos =  $_SESSION["produtos"];
  $user_dados  =  $_SESSION["user_data"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Criar Post</title>
</head>
<body>
    <form class="form" action="./resolve_post.php" method="POST">
      <label data-opacity="0">Nome</label>
      <input type="name" name="name" id="name" data-opacity="0" required>
      <label data-opacity="0">Descricao</label>
      <input type="text" name="descricao" id="descricao" data-opacity="0" required>
      <label data-opacity="0">URL da imagem</label>
      <input type="text" name="url" id="url" data-opacity="0" required>
      <button type="submit" data-opacity="0">POSTAR</button>
    </form>
  <script src="./assets/script/script.js"></script>
</body>
</html>