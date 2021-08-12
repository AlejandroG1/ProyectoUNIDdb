<?php 
session_start();
$statusSesion = $_SESSION['statusAccount'];
$userSesion = $_SESSION['user'];

if($statusSesion !== '5'){
    if($userSesion == null || $userSesion == ''){
        echo 'No puedes estar en esta pagina inicia sesion para rederigirte a correctamente';
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row mb-5">
<div class="col-sm-1">
<a href="../includes/_sesion/cerrarSesion.php"> <button type="Button" class="btn btn-danger btn-lg"> cerrar sesion </button></a>
</div>
<div class="col-sm-11">
<h3 class="text-center">MIS ESTUDIOS</h3> 
</div>
</div>

<div class="table-responsive">
                     <table class="table table-striped table-hover" id="table-data">
                         <thead>    
                         <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                         </tbody>
                         </table>
</div>

<form name="educacion">
<div class="row justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nombre_institucion">Nombre de la institucion:</label>
            <input type="text" name="nombre_institucion" id="nombre_institucion" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="descripcion_estudio">Descripcion de estudios:</label>
            <input type="text" name="descripcion_estudio" id="descripcion_estudio" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tiempo_cursado">Tiempo cursando:</label>
            <input type="text" name="tiempo_cursado" id="tiempo_cursado" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 form-group">
        <button type="button" id="btnSubmit" class="btn btn-success btn-md space">siguiente paso..</button>
    </div>
    <div class="col-md-4 form-group">
    <button type="button" id="btnAdd" class="btn btn-danger btn-md space">agregar estudios</button>
    </div>
</div>
</div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../js/educacion.js"></script>
</html>