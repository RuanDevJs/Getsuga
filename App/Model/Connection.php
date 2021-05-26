<?php

namespace Connection;

class Connect{
  private static $instance;
  public static function getConn(){
    if(!isset(self::$instance)){
      $instance = new \PDO("mysql:host=localhost;dbname=e-homes;", 'RIT0', '12345e');
      return $instance;
    }else{
      return self::$instance;
    }
  }
}