<?php
require_once 'models/productos.php';
// require_once 'models/vitrina.php';

class productosController{

  public function index(){
    $producto = new Producto();
    $productos = $producto->getAll();
    require_once "views/productos/index.php";
  }


  public function ingresar(){
    if (isset($_POST)) {
      $producto = new Producto();
      $producto->setDescripcion($_POST['descripcion']);
      $producto->setPrecio($_POST['precio']);
      $producto->setStock($_POST['stock']);
      $producto->setOferta($_POST['oferta']);
      $producto->setImagen($_POST['imagen']);
      $save = $producto->ingresar();

      // if ($save) {
      //   $_SESSION['register']= "complete";
      // }else {
      //   $_SESSION['register']= "failed";
      // }
    }
    // else{
    //   $_SESSION['register']= "failed";
    // }
    header("Location:".base_url.'productos/index');
  }

  // public function borrar(){
  //   if (isset($_POST)) {
  //     $producto = new Producto();
  //     $producto->getId($_POST['id']);
  //
  //     $save = $producto->ingresar();
  // }
}
?>
