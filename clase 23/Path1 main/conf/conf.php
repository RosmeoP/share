<?php
class ConexionaDB{
  // variable o caracteristicas
  //-- servidor, usuario, contraseña, base de datos, conexion
  private $server;
  private $usuario;
  private $contraseña;
  private $db;
  public $conexion;

 public function __construct($server, $usuario, $contraseña, $db) {
  $this->server = $server;
  $this->usuario = $usuario;
  $this->contraseña = $contraseña;
  $this->db = $db;
  //variable de conexion tiene que ir nula porque se llena con palabras reservadas y luego con el objeto
  $this->conexion = null;
 }

 public function conectar(){
  $this->conexion = new mysqli($this->server,$this->usuario,$this->contraseña,$this->db);
  if($this->conexion->connect_error){
    die("Conexion a la base de datos".$this->conexion->connect_error);
  }else{
    echo"Conexion a la base de datos exitosamente";
  }
  //conexion a la base de datos
 }

 public function desconectar(){
  if($this->conexion===null){

  }else{
    $this->conexion->close();
    echo"Se cerro la conexion";
  }
 }


}

$conexion= new ConexionaDB('localhost', 'root', '', 'personas');

?>