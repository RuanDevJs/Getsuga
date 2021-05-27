<?php
  require_once '../Controller/UserController.php';
  $email = $_POST["email"];
  $password = $_POST["password"];

  if(($email === 'ruanelpidio@hotmail.com') && ($password === '12345')){
    return UserController::AdmLogin($email, $password);
  }

  UserController::logIn($email, $password);
?>