<?php
require 'config/conexion.php';
require 'config/turno.php';

if($_POST['send_']){
    $nombre = $_POST['nombre'];
    $tema = $_POST['tema'];
    $fecha = $_POST['fecha'];
    $turnos = new Turno();
    $turnos->insertarCita($nombre,$tema,$fecha);
}

echo "<script type='text/javascript'>
        window.location='usuarios.php';
    </script>";

?>