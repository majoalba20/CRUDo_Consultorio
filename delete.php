<?php

require 'config/conexion.php';
require 'config/turno.php';

if($_POST['sendDelete']){
    $id = $_POST['id'];
    $turnos = new Turno();
    $turnos->eliminarCita($id);
}

echo "<script type='text/javascript'>
        window.location='usuarios.php';
    </script>";

?>