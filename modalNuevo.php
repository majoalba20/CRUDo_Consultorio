<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendar una Cita Nueva</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row py-3">
                        <div class="col">
                            <form class="row g-3" action="nuevo.php" method="POST" autocomplete="off">
                                <div class="colmd-4">
                                    <label for="nombre" class="form-label">Nombre del equipo</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required autofocus>
                                </div>
                                <div class="colmd-4">
                                    <label for="tema" class="form-label">Tema</label>
                                    <input type="text" name="tema" id="tema" class="form-control" required autofocus>
                                </div>
                                <div class="colmd-4">
                                    <label for="fecha" class="form-label">Fecha</label>
                                    <input type="text" name="fecha" id="fecha" class="form-control" placeholder='DD-MM-YYYY HH:MM XM' required autofocus>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" name='send_' value='send_' type="submit">Guardar</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>