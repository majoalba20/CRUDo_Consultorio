<?php
require_once("autoload.php");

class usuario extends conexion{
      private $strnombre;
      private $strtema;
      private $strfecha;
      private $conexion;

      public function __construct(){
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
      }
public function insertusuario(string $nombre, string $tema, string $fecha)
{

$this->strnombre = $nombre;
$this->strtema = $tema;
$this->strfecha = $fecha;

$sql = "INSERT INTO citas(nombre,tema,fecha) values(?,?,?)";
$insert = $this->conexion->prepare($sql);
$arrData = array($this->strnombre,$this->strtema,$this->strfecha);
$resInsert = $insert->execute($arrData);
$idInsert = $$this->conexion->lastinsertid();
return $idInsert;
}

}



?>