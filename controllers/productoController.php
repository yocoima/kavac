<?php
require_once 'models/productos.php';


class productoController{

  public function index(){

    $producto = new Producto();
    $producto->getAll();
    require_once "views/productos/index.php";
  }



}

?>
