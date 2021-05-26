<?php
  require_once './assets/components/header_auth.php';
  require_once '../Controller/UserController.php';
  if(!isset($_SESSION["user_data"])){
    header('location: index.php');
  }
  $data =  $_SESSION["productsIndex"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Products</title>
</head>
<body>
  <section class="products">
    <h1><a href="./create_post.php">Inserir produto</a></h1>
    <div class="products-container">
      <?php
        foreach($data as $produtos){
          echo 
          "<div data-opacity> 
            <img src='".$produtos['url']."' data-opacity/> 
            <h1 data-opacity>". $produtos['name']. "</h1>".
            "<p data-opacity>". $produtos['description'] ."</p>".
          "</div>";
        }
      ?>
    </div>
  </section>

  <script src="./assets/script/script.js"></script>
</body>
</html>