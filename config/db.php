<?php

class Database{

  public static function connect(){
    $db= new mysqli ('localhost', 'root', 'Google1875','bd_kavac');
    $db->query("SET NAMES 'UTF8'");
    return $db;
  }
}

?>
