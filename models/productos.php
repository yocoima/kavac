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

  public function getOne(){
    $producto = $this->bd->query("SELECT * FROM  productos WHERE id= {$this->getId()}");
    return $producto->fetch_object();

  }

  public function ingresar(){
    $sql = "INSERT INTO productos VALUES (NULL, '{$this->getDescripcion()}', '{$this->getPrecio()}', '{$this->getStock()}', '{$this->getOferta()}','{$this->getImagen()}');";
    $ingresa= $this->bd->query($sql);
  }

  public function editar(){
    $sql = "UPDATE productos SET descripcion= '{$this->getDescripcion()}', precio=  '{$this->getPrecio()}', stock= '{$this->getStock()}', oferta='{$this->getOferta()}' ";
    if ($this->getImagen() !=null) {
      $sql .= ", imagen='{$this->getImagen()}'";
    }
      $sql .= " WHERE id={$this->id};";
      $edita= $this->bd->query($sql);
      $result = false;
      if ($edita) {
        $result = true;
          return $result;
      }
      return $result;
    }

  public function eliminar(){
    $sql = "DELETE FROM productos WHERE id={$this->id}";
    $eliminar = $this->bd->query($sql);
    $result = false;
    if ($eliminar) {
      $result = true;
    }
    return $result;
  }


}

?>
