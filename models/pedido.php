<?php

class Pedido {

  private $id;
  private $id_usuario;
  private $comuna;
  private $calle;
  private $numero_calle;
  private $numero_casa_apto;
  private $total;
  private $bd;

  public function __construct(){
    $this->bd = Database::connect();
  }

  function getId(){
    return $this->id;
  }
  function getId_usuario(){
    return $this->id_usuario;
  }
  function getComuna(){
    return $this->comuna;
  }
  function getCalle(){
    return $this->calle;
  }
  function getNumero_calle(){
    return $this->numero_calle;
  }
  function getNumero_casa_apto(){
    return $this->numero_casa_apto;
  }
  function getTotal(){
    return $this->total;
  }


  function setId($id){
    $this->id = $id;
  }
  function setId_usuario($id_usuario){
    $this->id_usuario = $id_usuario;
  }
  function setComuna($comuna){
    $this->comuna = $comuna;
  }
  function setCalle($calle){
    $this->calle = $calle;
  }
  function setNumero_calle($numero_calle){
    $this->numero_calle = $numero_calle;
  }
  function setNumero_casa_apto($numero_casa_apto){
    $this->numero_casa_apto = $numero_casa_apto;
  }
  function setTotal($total){
    $this->total = $total;
  }

  public function save(){
    $sql = "INSERT INTO direccion VALUES (NULL, '{$this->getId_usuario()}', '{$this->getComuna()}', '{$this->getCalle()}', '{$this->getNumero_calle()}', '{$this->getNumero_casa_apto()}', '{$this->getTotal()}' );";
    $ingresa= $this->bd->query($sql);
  }

  public function getAll(){
    $producto = $this->bd->query("SELECT * FROM  productos;");
    return $producto;
  }

  public function getOne(){
    $producto = $this->bd->query("SELECT * FROM  productos WHERE id= {$this->getId()}");
    return $producto->fetch_object();

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

  // $direccion = $chequear->fetch_object();

  public function getAddress(){
    $sql = "SELECT * FROM direccion WHERE id_usuario = {$this->getId()}";
    $chequear = $this->bd->query($sql);
    return $chequear;
  }

  public function chekAddress(){
    $sql = "SELECT * FROM direccion WHERE id_usuario = {$this->getId()}";
    $chequear = $this->bd->query($sql);
    $result = false;
    $contador = mysqli_num_rows($chequear);
    if ($contador > 0) {
      $result = true;
    }    
    return $result;
    }



}

?>
