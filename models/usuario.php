<?php
// require_once '../controllers/usuarioController.php'

class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
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

    public function save(){
      $sql="INSERT INTO usuarios VALUES (NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getCorreo()}', '{$this->getClave()}');";
      $save= $this->bd->query($sql);
      $result= false;
      if ($save) {
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
            $result = $usuario;
          }
        }
        return $result;
      }

}

?>

<!-- public function login(){
  $correo = $this->getCorreo();
  $clave = $this->getClave();
  $sql ="SELECT * FROM usuarios WHERE correo = '$correo'";
  $login= $this->bd->query($sql);
  $contador= mysqli_num_rows($login);
  $usuario = mysqli_fetch_assoc($login);
  $verify = password_verify($clave, $usuario['clave']);
  $result = false;
  if($contador == 1 && $verify) {
    $result = true;
  }
  return $result;
} -->
