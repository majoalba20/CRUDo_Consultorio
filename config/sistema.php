<?php
require_once("autoload.php");

$objusuario = new usuario();

/*insertar usuario*/
$insert = $objusuario->insertusuario("emmanuel","ecommerce",07/09/1993);
echo $insert;



?>