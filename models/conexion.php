<?php

class Conexion{

  public function get_conexion(){

    $user='root';
    //$pass='';
    $db='appsuser_taxisya';
    //$host='localhost';
    $pass='Ttgb1010';
    $host='bdtaxisya.c5snbcawlqxt.us-east-2.rds.amazonaws.com';

    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    return $conexion;

  }

  public function close_conexion($statement, $conexion){
    global $statement, $conexion;
    $statement->closeCursor();
    $statement = null;
    $conexion = null;
  }



}
 ?>
