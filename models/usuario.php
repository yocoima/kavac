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
      return $this->clave;
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
      $this->clave = password_hash($this->bd->real_escape_string($clave), PASSWORD_BCRYPT, ['cost' =>4]);
    }

    public function save(){
      $sql="INSERT INTO usuarios VALUES (NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getCorreo()}', '{$this->getClave()}')";
      $save= $this->bd->query($sql);
      $result= false;
      if ($save) {
          $result= true;
      }
      return $result;
    }
}

?>
