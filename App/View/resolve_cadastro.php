<?php
  require_once '../Controller/UserController.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];


  if(isset($name) && isset($email) && isset($password)){
    UserController::create($name, $email, $password);
  }else{
    return header('location: form.php');
  }
?>