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

      $file = $_FILES['imagen'];
      $filename = $file['name'];
      $mimetype = $file['type'];

      if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/git") {
        if (!is_dir('uploads/img')) {
          mkdir('uploads/img', 0777, true);
        }
        move_uploaded_file($file['tmp_name'], 'uploads/img'.$filename);
        $producto->setImagen($filename);
      }

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

  public function editar(){
    if(isset($_GET['id'])){
      $edit= true;
      $id= $_GET['id'];
      $producto = new Producto();
      $producto->setId($id);
      $producto_edit = $producto->getOne();
      

      require_once "views/productos/index.php";
    }else{

      header("Location:".base_url.'productos/index');
    }

  }

  public function eliminar(){
    if(isset($_GET['id'])){
      $id= $_GET['id'];
      $producto = new Producto();
      $producto->setId($id);
      $delete = $producto->eliminar();
      if ($delete) {
        $_SESSION['delete'] = 'complete';
      }else {
        $_SESSION['delete'] = 'failed';
      }
    }else {
      $_SESSION['delete'] = 'failed';
    }
    header("Location:".base_url.'productos/index');
  }
}
?>
