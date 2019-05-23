<?php
require_once 'models/productos.php';

class vitrinaController{

public function index(){
  $producto = new Producto();
  $productos = $producto->getAll();  

  require_once "views/vitrina/index.php";
  }
}
?>
