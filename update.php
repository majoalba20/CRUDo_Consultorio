<?php
require 'config/conexion.php';
require 'config/turno.php';

if($_POST['sendEdit']){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tema = $_POST['tema'];
    $fecha = $_POST['fecha'];
    $turnos = new Turno();
    $turnos->actualizarCita($id,$nombre,$tema,$fecha);
}

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

header("Location:index.php?ea=1");

?>