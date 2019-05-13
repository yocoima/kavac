<?php
// require_once '../controllers/usuarioController.php'

class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $rol;
    private $bd;

    public function __construct(){
      $this->bd = Database::connect();
    }

    function getId(){
      return $this->id;
    }
    function getNombre(){
      return $this->nombre;
    }
    function getApellido(){
      return $this->apellido;
    }
    function getCorreo(){
      return $this->correo;
    }
    function getClave(){
      return password_hash($this->bd->real_escape_string($this->clave), PASSWORD_BCRYPT, ['cost' =>4]);
    }
    function getRol(){
      return $this->rol;
    }


    function setId($id){
      $this->id = $id;
    }
    function setNombre($nombre){
      $this->nombre = $this->bd->real_escape_string($nombre);
    }
    function setApellido($apellido){
      $this->apellido = $this->bd->real_escape_string($apellido);
    }
    function setCorreo($correo){
      $this->correo = $this->bd->real_escape_string($correo);
    }
    function setClave($clave){
      $this->clave = $clave;
    }
    function setRol($rol){
      $this->rol = $rol;
    }

    public function save(){
      $chekMail = "SELECT * FROM usuarios WHERE correo = '{$this->getCorreo()}'";
      $verificacion = $this->bd->query($chekMail);
      $contador = mysqli_num_rows($verificacion);
      $chequeado = false;
      if ($contador == 0) {
          $chequeado= true;
      }else {
          return $chequeado;
        }
        $sql="INSERT INTO usuarios VALUES (NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getCorreo()}', '{$this->getClave()}',2);";
        $save= $this->bd->query($sql);
        $result= false;
        if ($save && $chequeado) {
          $result= true;
        }
        return $result;
      }


    public function login(){
      $result= false;
      $correo = $this->correo;
      $clave = $this->clave;
      $sql ="SELECT * FROM usuarios WHERE correo = '$correo'";
      $login= $this->bd->query($sql);
      if($login && $login->num_rows == 1) {
        $usuario= $login->fetch_object();
        $verify = password_verify($clave, $usuario->clave);
        if ($verify) {
           $result= $usuario;
          }
        }
        return $result;
      }
}
?>
