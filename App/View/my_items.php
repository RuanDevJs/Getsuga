<?php
  require_once './assets/components/header_auth.php';
  require_once '../Controller/UserController.php';
  if(!isset($_SESSION["user_data"])){
    header('location: index.php');
  }
  $produtos =  $_SESSION["produtos"];
  $user_dados  =  $_SESSION["user_data"];
  $id = $user_dados[0]['id'];
  UserController::showMyPosts($id);
  $user_items = $_SESSION["my_items"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>My items</title>
</head>
<body>
<section class="products">
    <div class="products-container">
      <?php
      if(!empty($user_items)){
        foreach($user_items as $items){
          echo 
          "<div data-opacity> 
            <img src='".$items['url']."' data-opacity/> 
            <h1 data-opacity>". $items['name']. "</h1>".
            "<p data-opacity>". $items['description'] ."</p>".
            "<a href='./apagar.php?id=".$items['id']."'>Apagar</a>".
          "</div>";
        }
      }else{
        echo "<h1 class='titulo' data-opacity> Você não possui posts</h1>";
      }
      ?>
    </div>
  </section>

  <script src="./assets/script/script.js"></script>
</body>
</html>