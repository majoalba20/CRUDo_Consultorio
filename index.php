<?php

require 'config/conexion.php';

$db = new Database();

$sentencia = $db->mysql->query("select * FROM citas");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <?php
include "navbar.php";
?>
</head>

<body class="py-3">
    <main class="my-container p-4">

        <div class="row">
            <div class="col">
                <h1>Productos</h1>
                <a href="#" class="btn btn-primary float-rigth"> Nuevo producto</a>
            </div>
        </div>
        <div class="row py-3">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>tema</th>
                            <th>fecha</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($resultado as $row) { ?>

                        <tr>
                            <th><?php echo $row['id'] ?></th>
                            <th><?php echo $row['nombre'] ?></th>
                            <th><?php echo $row['tema'] ?></th>
                            <th><?php echo $row['fecha'] ?></th>

                            <th><a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a>
                            </th>
                            <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                            </th>
                        </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>


