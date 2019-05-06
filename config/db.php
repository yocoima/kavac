<?php

class Database{

  public static function connect(){
    $bd= new mysqli ('localhost', 'root', 'Google1875','bd_kavac');
    $bd->query("SET NAMES 'UTF8'");
    return $db;
  }
}

?>
