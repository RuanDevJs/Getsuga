<?php
session_start();
require_once '../Model/Connection.php';

use Connection\Connect;

class UserController {
  public static function index(){
    $sql = "SELECT * FROM produtos";
    $instance = Connect::getConn()->prepare($sql);
    $instance->execute();
    $resultado = $instance->fetch(PDO::FETCH_ASSOC);
    return $_SESSION["produtos"] = $resultado;
  }

  public static function productsIndex(){
    $sql = "SELECT * FROM user_produtos";
    $instance = Connect::getConn()->prepare($sql);
    $instance->execute();
    $resultado = $instance->fetchAll(PDO::FETCH_ASSOC);
    return $_SESSION["productsIndex"] = $resultado;
  }

  public static function show($email, $password){
    $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :password";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue("email", $email);
    $instance->bindValue("password", $password);
    $instance->execute();

    $resultado = $instance->fetchAll(PDO::FETCH_ASSOC);
    return $_SESSION["user_date"] = $resultado; 
  }

  public static function logIn($email, $password){
    $sql = "SELECT * FROM usuarios WHERE email = :email AND password = :password";
   $instance = Connect::getConn()->prepare($sql);
   $instance->bindValue("email", $email);
   $instance->bindValue("password", $password);
   $instance->execute();
   
  if($instance->rowCount() > 0){
    $resultado = $instance->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['user_data'] = $resultado;
    return header('location: home.php');
  }else{
    return header('location: login.php');
  }}

  public static function getByEmail($email){
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue("email", $email);
    $instance->execute();
    return $instance;
  }

  public static function getById($id){
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue("id", $id);
    $instance->execute();
    return $instance;
  }

  public static function create($name, $email, $password){
    $sql = "INSERT INTO usuarios(name, email, password) VALUES(?,?,?)";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue(1, $name);
    $instance->bindValue(2, $email);
    $instance->bindValue(3, $password);

    $getByEmail = self::getByEmail($email);
    if($getByEmail->rowCount() > 0){
      echo '<script> alert("This email is already been using")';
      return header('location: form.php');
    }

    $instance->execute();
    $resultado = self::show($email, $password);
    $_SESSION["user_data"] = $resultado;
    header('location: home.php');
  }

  public static function ajaxName($id, $type,$name){
    $sql = "UPDATE usuarios SET name = :name WHERE id = :id";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue('name', $name);
    $instance->bindValue('id', $id);
    $instance->execute();

    $getById = self::getById($id);
    $resultado = $getById->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["user_data"] = $resultado;
  }

  
  public static function ajaxEmail($id, $type,$name){
    $sql = "UPDATE usuarios SET email = :name WHERE id = :id";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue('name', $name);
    $instance->bindValue('id', $id);
    $instance->execute();

    $getById = self::getById($id);
    $resultado = $getById->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["user_data"] = $resultado;
  }

  public static function ajaxSenha($id, $type,$name){
    $sql = "UPDATE usuarios SET password = :name WHERE id = :id";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue('name', $name);
    $instance->bindValue('id', $id);
    $instance->execute();

    $getById = self::getById($id);
    $resultado = $getById->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["user_data"] = $resultado;
  }

  public static function createPost($name, $description, $url, $id){
    $sql = "INSERT INTO user_produtos(name, description, url, user_id) VALUES(?,?,?,?)";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue(1, $name);
    $instance->bindValue(2, $description);
    $instance->bindValue(3, $url);
    $instance->bindValue(4, $id);
    $instance->execute();
    header("location: products.php");
  }

  public static function showMyPosts($id){
    $sql = "SELECT * FROM user_produtos WHERE user_id = :id";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue("id", $id);
    $instance->execute();

    $resultado = $instance->fetchAll(PDO::FETCH_ASSOC);
    return $_SESSION["my_items"] = $resultado; 
  }

  public static function delete($id){
    $sql = "DELETE FROM user_produtos WHERE id = :id";
    $instance = Connect::getConn()->prepare($sql);
    $instance->bindValue('id', $id);
    $instance->execute();
    header('location: home.php');
  }

}UserController::index();
UserController::productsIndex();
