<?php 
session_start();
$statusSesion = $_SESSION['statusAccount'];
$userSesion = $_SESSION['user'];

if($statusSesion !== '6'){
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
<h3 class="text-center">MIS DATOS EXPERIENCIA</h3> 
</div>
</div>
<div class="table-responsive">
                     <table class="table table-striped table-hover" id="table-data">
                         <thead>    
                         <tr>
                        <th>Empresa</th>
                        <th>Puesto</th>
                        <th>descripcion</th>
                        <th>tiempo</th>
                        <th>Contacto emp.</th>
                        <th>jefe directo</th>
                        <th>Motivos de separacion</th>
                        <th>accion</th>
                        </tr>
                        </thead>
                        <tbody>
                         </tbody>
                         </table>
</div>

    <div class="container row">
        <div class="col-sm-6 offset-3 mt-5">
            <form name="exp" method="POST">
                <div class="row">
                <div class="col-sm-4 mb-3">
                    <label for="empresa_experiencia" class="form-label">Empresa de Experiencia *</label>
                    <input type="text" id="empresa_experiencia" name="empresa_experiencia" class="form-control">
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="puesto_trabajo" class="form-label">Puesto desempeñado *</label>
                    <input type="text" id="puesto_trabajo" name="puesto_trabajo" class="form-control">
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="descripcion_experiencia" class="form-label">Des. de experiencia *</label>
                    <input type="text" id="descripcion_experiencia" name="descripcion_experiencia" class="form-control">
                </div>
                </div>
                <div class="row">
                <div class="col-sm-4 mb-3">
                    <label for="Tiempo_dedicado" class="form-label">Tiempo dedicado *</label>
                    <input type="text" id="Tiempo_dedicado" name="Tiempo_dedicado" class="form-control">
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="Contacto_empresa" class="form-label">Contacto empresa *</label>
                    <input type="text" id="Contacto_empresa" name="Contacto_empresa" class="form-control">
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="nombre_jefe" class="form-label">Nombre jefe *</label>
                    <input type="text" id="nombre_jefe" name="nombre_jefe" class="form-control">
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12 mb-3">
                    <label for="motivo_separacion" class="form-label">Motivo separacion *</label>
                    <input type="text" id="motivo_separacion" name="motivo_separacion" class="form-control">
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 mb-3">
                    <button type="button" id="btnSubmit" class="btn btn-success btn-md">Guardar</button>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 mb-3">
                    <button type="button" id="btnAdd" class="btn btn-success btn-md">Agregar experiencia...</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../js/experiencia.js"></script>
</html>