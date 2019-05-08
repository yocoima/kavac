<?php
require_once 'models/usuario.php';

class usuarioController{

  public function index(){
    echo "controlador usuarios, accion index";
  }
  public function registro(){
    require_once "views/usuarios/registro.php";
  }
  public function save(){
    if (isset($_POST)) {
      $usuario = new Usuario();
      $usuario->setNombre($_POST['nombre']);
      $usuario->setApellido($_POST['apellido']);
      $usuario->setCorreo($_POST['correo']);
      $usuario->setClave($_POST['clave']);
      var_dump($usuario);
    }
  }
}

?>
