<?php
/**
 * Permitir la conexion contra la base de datos
 */
class bd
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="tronos";
  private $pass="tronos123";
  private $db_name="gameofthrones";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  public function Actores(){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT * FROM cast");

    }

}

public function ActoresTemporada(){
    if($this->error==false){
      $resultado2 = $this->conexion->query("SELECT * FROM season_ep");

  }

}
}

 ?>
