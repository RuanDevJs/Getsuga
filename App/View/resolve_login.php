<?php
  require_once '../Controller/UserController.php';
  $email = $_POST["email"];
  $password = $_POST["password"];

  UserController::logIn($email, $password);
?>