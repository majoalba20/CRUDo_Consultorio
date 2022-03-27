<?php
require 'config/conexion.php';
require 'config/turno.php';

$test = new Turno();
$prueba = $test->obtenerCitas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuarios</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            min-height: 100vh;
        }

        .side{
            margin-left: -300px;
        }

        .navbar{
            width: 250px;
            height: 100vh;
            position: fixed;
            background-color: #49b675;
            transition: 0.4s;
        }

        .my-cont{
            margin-left: 0px;
        }

        .my-cont > #btn-menu{
            position: fixed;
        }

        section{
            margin-left: 250px;
        }
    </style>

</head>
<body>
    <nav class='navbar navbar-expand d-flex flex-column align-item-start' 
    id='sidebar'>
        <h2 class='text-light mt-5'>CONSULTORIO</h2>
        <hr style="width:80%;text-align:left;margin-left:0">
        <div style='width:100%;height:50px;' class='d-flex align-items-center bg-light justify-content-center'>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
            <a href="usuarios.php" class='text-dark text-decoration-none'>Usuarios</a>
        </div>
    </nav>
    
    <section class='p-3 my-container'>
        <button class="btn btn-success p-2" id='btn-menu'>
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
        </button>
        
        <main class="container">
            <div class="row">
                <div class="col">
                    <h1>Registro de Citas</h1>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Programar una cita
                    </button>

                    <?php include('modalNuevo.php'); ?>

                </div>
            </div>
            <div class="row pt-3">
                <?php
                    include('msjs.php');
                ?>
            </div>
            
            <?php if(sizeof($prueba) != 0){ ?>
                <div class="row py-3">
                    <div class="col">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr class="text-center table-success">
                                    <th>Nombre</th>
                                    <th>Tema</th>
                                    <th>Fecha</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($prueba AS $fila){ ?>
                                    <tr class="text-center">
                                        <td><?php echo $fila['nombre'] ?></td>
                                        <td><?php echo $fila['tema'] ?></td>
                                        <td><?php echo $fila['fecha'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editChildresn<?php echo $fila['id']; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="purple" class="bi bi-pencil" role="button" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                            </button>
                                            <?php include('modalUpdate.php'); ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteC<?php echo $fila['id']; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" role="button" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                            <?php include('modalDelete.php'); ?>
                                        </td>  
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } else{ ?>
                <div class="row py-3">
                    <div class="col">No hay citas pendientes</div>
                </div>
            <?php } ?> 
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    let sidebar = document.querySelector('#sidebar');
    let btn = document.querySelector('#btn-menu');
    let cont = document.querySelector('.my-container');
    btn.addEventListener('click',()=>{
        sidebar.classList.toggle('side');
        cont.classList.toggle('my-cont');
    })

    setTimeout(function () {
        document.querySelector('.alert').style.display = 'none';
    }, 2000); 
    </script>

</body>
</html>


