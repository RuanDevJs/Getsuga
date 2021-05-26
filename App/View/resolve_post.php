<?php
  require_once '../Controller/UserController.php';
  $name = $_POST["name"];
  $descricao = $_POST["descricao"];
  $url = $_POST["url"];
  $id = $_SESSION["user_data"][0]["id"];

  if(isset($name) && isset($descricao) && isset($url)){
    if(!empty($name) && !empty($descricao) && !empty($url)){
       UserController::createPost($name, $descricao, $url, $id); 
    }
  }
?>


