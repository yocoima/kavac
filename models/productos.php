<?php

class Producto {

  private $id;
  private $id_producto;
  private $precio;
  private $stock;
  private $oferta;
  private $imagen;
  private $bd;

  public function __construct(){
    $this->bd = Database::connect();
  }

  function getId(){
    return $this->id;
  }
  function getIdProducto(){
    return $this->id_producto;
  }
  function getPrecio(){
    return $this->precio;
  }
  function getStock(){
    return $this->stock;
  }
  function getOferta(){
    return $this->oferta;
  }
  function getImagen(){
    return $this->imagen;
  }


  function setId($id){
    $this->id = $id;
  }
  function setIdProducto(){
    $this->id_producto = $id_producto;
  }
  function setPrecio(){
    $this->precio = $precio;
  }
  function setStock(){
    $this->stock = $stock;
  }
  function setOferta(){
    $this->oferta = $oferta;
  }
  function setImagen(){
    $this->imagen = $imagen;
  }


  public function getAll(){
    $producto = $this->bd->query("SELECT * FROM  productos;");
    return $producto;
  }



}

?>
