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
          echo "<li data-opacity='0'> Name: ".$dados["name"]."</li>";
          echo "<li data-opacity='0'> Email: ".$dados["email"]."</li>";
          echo "<li data-opacity='0' class='password'> Senha:"."<p data-pass>".$dados["password"]."</p>" ."</li>";
        }
      ?>
      </ul>
      <h1 class="titulo">Atualizar </h1>
      <ul class="update-list" data-opacity="0">
        <?php
          foreach($user_dados as $dados){
            echo '
              <dd >
                <h1 data-click>Nome</h1>
                <dt data-update>
                <input type="text" data-list data-ajax="nome" />
                <button data-list data-send data-id='.$dados["id"].'>ENVIAR</button>
                </dt>
              </dd> 
              
              <dd>
                <h1 data-click>Email</h1>
                <dt data-update>
                <input type="text" data-list data-ajax="email" />
                <button data-list data-send data-id='.$dados["id"].'>ENVIAR</button>
                </dt>
              </dd> 

              <dd>
                <h1 data-click>Senha</h1>
                <dt data-update>
                <input type="password" data-list data-ajax="password" />
                <button data-list data-send data-id='.$dados["id"].'>ENVIAR</button>
                </dt>
              </dd> 
            ';
          }
        ?>
      </ul>
      
      </div>
      <img src="./assets/img/data-lottie.gif" data-opacity="0">
    </div>
  </section>

  <script src="./assets/script/script.js"></script>
</body>
</html>