<?php

class Turno extends Database{
    var $nombre;
    var $tema;
    var $fecha;
    var $conexion;

    function __construct(){
        $this->conexion = new Database();
        $this->conexion = $this->conexion->conectar();
    }
    
    function insertarCita($nombre,$tema,$fecha){
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->fecha = $fecha;

        $sql = 'INSERT INTO citas(nombre,tema,fecha) VALUES (?,?,?)';
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->nombre,$this->tema,$this->fecha);
        $resInsert = $insert->execute($arrData);
    }

    function obtenerCitas(){
        $sentencia = $this->conexion->query("select * FROM citas");
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

}

?>