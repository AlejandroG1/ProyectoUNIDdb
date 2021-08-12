<?php 
session_start();
$statusSesion = $_SESSION['statusAccount'];
$userSesion = $_SESSION['user'];

if($statusSesion !== '7'){
    if($userSesion == null || $userSesion == ''){
        echo 'No puedes estar en esta pagina inicia sesion para rederigirte a correctamente';
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row mb-5">
<div class="col-sm-1">
<a href="../includes/_sesion/cerrarSesion.php"> <button type="Button" class="btn btn-danger btn-lg"> cerrar sesion </button></a>
</div>
<div class="col-sm-11">
<h3 class="text-center">MIS PARENTESCOS</h3> 
</div>
</div>
<div class="table-responsive">
                     <table class="table table-striped table-hover" id="table-data">
                         <thead>    
                         <tr>
                        <th>Nombres</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Parentesco</th>
                        </tr>
                        </thead>
                        <tbody>
                         </tbody>
                         </table>
</div>

    <div class="row">
    <div class="container">
        <div class="col-sm-6 offset-3 mt-5">
            <form name="parent">
                <div class="row">

                <div class="mb-3 col-sm-4">
                    <label for="nombres" class="form-label">Nombres *</label>
                    <input type="text" id="nombres" name="nombres" class="form-control">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="apellido_m" class="form-label">Apelliedo materno *</label>
                    <input type="text" id="apellido_m" name="apellido_m" class="form-control">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="apellido_p" class="form-label">Apellido paterno *</label>
                    <input type="text" id="apellido_p" name="apellido_p" class="form-control">
                </div>
                <div class="row">
                <div class="mb-3 col-sm-4">
                    <label for="direccion" class="form-label">Dirección *</label>
                    <input type="text" id="direccion" name="direccion" class="form-control">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="telefono" class="form-label">Telefono *</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control">
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="parentesco" class="form-label">Tipo de parentesco *</label>
                    <input type="text" id="parentesco" name="parentesco" class="form-control">
                </div>
                </div>
                <div class="mb-3">
                    <button type="button" id="btnAdd" class="btn btn-danger">Agregar parentesco</button>
                </div>
                <div class="mb-3">
                    <button type="button" id="btnSubmit"  class="btn btn-success">Guardar</button>
                </div>

            </form>
        </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../js/parentescos.js"></script>
</html>