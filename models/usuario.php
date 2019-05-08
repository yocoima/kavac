<?php
// require_once '../controllers/usuarioController.php'

class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $db;

    public function __construct(){
      $this->db = Database::connect();
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
      $this->nombre = $this->db->real_scape_string($nombre);
    }
    function setApellido($apellido){
      $this->apellido = $this->db->real_scape_string($apellido);
    }
    function setCorreo($correo){
      $this->correo = $this->db->real_scape_string($correo);
    }
    function setClave($clave){
      $this->clave = password_hash($this->db->real_scape_string($clave), PASSWORD_BCRYPT, ['cost' =>4]);
    }

    public function save(){
      $sql="INSERT INTO usuarios VALUES (NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getCorreo()}', '{$this->getClave()}')";
      $save= $this->db->query($sql);
      $result= false;
      if ($save) {
          $result= true;
      }
      return $result;
    }
}

?>
