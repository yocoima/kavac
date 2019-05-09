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
      $save = $usuario->save();
      if ($save) {
        $_SESSION['register']= "complete";
      }else {
        $_SESSION['register']= "failed";
      }
    }else{
      $_SESSION['register']= "failed";
    }
    header("Location:".base_url.'usuario/registro');
  }

  public function login(){
    if (isset($_POST)) {
      $usuario = new Usuario();
      $usuario->setCorreo($_POST['correo']);
      $usuario->setClave($_POST['clave']);

      $login = $usuario->login();
      if ($login) {
        $_SESSION['login']= $login;
      }else {
        $_SESSION['login']= "failed";
      }
      header("Location:".base_url.'index.php');
    }
  }
}


?>
