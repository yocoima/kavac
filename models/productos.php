<?php

class Producto {

  private $id;
  private $descripcion;
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
  function getDescripcion(){
    return $this->descripcion;
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
  function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
  }
  function setPrecio($precio){
    $this->precio = $precio;
  }
  function setStock($stock){
    $this->stock = $stock;
  }
  function setOferta($oferta){
    $this->oferta = $oferta;
  }
  function setImagen($imagen){
    $this->imagen = $imagen;
  }


  public function getAll(){
    $producto = $this->bd->query("SELECT * FROM  productos;");
    return $producto;
  }

  public function ingresar(){
    $sql = "INSERT INTO productos VALUES (NULL, '{$this->getDescripcion()}', '{$this->getPrecio()}', '{$this->getStock()}', '{$this->getOferta()}','{$this->getImagen()}');";
    $ingresa= $this->bd->query($sql);
  }





  // public function borrar(){
  //   $sql = "DELETE FROM productos WHERE `productos`.`id` = '{$this->getId()}'"
  //   $elimina = $this->bd->query($sql);
  // }


}

?>
