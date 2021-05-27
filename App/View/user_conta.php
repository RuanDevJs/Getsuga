<?php
  require_once './assets/components/header_admin.php';
  require_once '../Controller/UserController.php';
  $user_dados  =  $_SESSION["usuario_admin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Profile</title>
</head>
<body>
  <section class="dados">
    <div class="dados-container">
      <div data-opacity="0">
      <h1 data-opacity='0'>meus dados</h1>
      <ul class="dados-list">
      <?php
        foreach($user_dados as $dados){
          echo "<li data-opacity='0'> Name: ".$dados["nome"]."</li>";
          echo "<li data-opacity='0'> Email: ".$dados["email"]."</li>";
          echo "<li data-opacity='0' class='password'> Senha:"."<p data-pass>".$dados["senha"]."</p>" ."</li>";
          echo "<li data-opacity='0'> Id:". $dados["id"]."</li>";
        }
      ?>
      </ul>
    </div> 
  </section>

  <script src="./assets/script/script.js"></script>
</body>