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

    function actualizarCita(int $id,string $nombre,string $tema,string $fecha){
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->fecha = $fecha;

        $sql = "UPDATE citas SET nombre=?, tema=?, fecha=? WHERE id=$id";
        $update = $this->conexion->prepare($sql);
        $arrData = array($this->nombre,$this->tema,$this->fecha);
        $resExecute = $update->execute($arrData);
        return $resExecute;
    }

    function eliminarCita($id){
        $sql = "DELETE FROM citas WHERE id=?";
        $delete = $this->conexion->prepare($sql);
        $arrData = array($id);
        $resDelete = $delete->execute($arrData);
        return $resDelete;
    }

}

?>