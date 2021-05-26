<?php
  require_once './UserController.php';
  if(isset($_GET["nome"])){
    $type = 'nome';
    $name = $_GET["nome"];
    $id = $_GET["id"];
    return UserController::ajaxName($id, $type, $name);
  }

  if(isset($_GET["email"])){
    $type = 'email';
    $email = $_GET["email"];
    $id = $_GET["id"];
    return UserController::ajaxEmail($id, $type, $email);
  }

  if(isset($_GET["password"])){
    $type = 'password';
    $senha = $_GET["password"];
    $id = $_GET["id"];
    return UserController::ajaxSenha($id, $type, $senha);
  }

?>