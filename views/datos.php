<?php 
session_start();
$statusSesion = $_SESSION['statusAccount'];
$userSesion = $_SESSION['user'];

if($statusSesion !== '2'){
    if($userSesion == null || $userSesion == ''){
        echo 'No puedes estar en esta pagina inicia sesion para rederigirte a correctamente';
        die();
    }
    else {
        header('Location: ../includes/_accounts.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
<form name="datos"  id="datos" method="POST">
 <div class="container mt-5 ">
<div class="row mb-5">
<div class="col-sm-1">
<a href="../includes/_sesion/cerrarSesion.php"> <button type="Button" class="btn btn-danger btn-lg"> cerrar sesion </button></a>
</div>
<div class="col-sm-11">
<h3 class="text-center">MIS DATOS GENERALES</h3> 
</div>
</div>
<div class="justify-content-center align-items-center">
<div class="row justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="form-group">
            <label for="usuario">Nombres:</label>
            <input type="text" name="nombres" id="nombres" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ApellidoP">Apellido Paterno:</label>
            <input type="text" name="ApellidoP" id="ApellidoP" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="apellidoM">apellido Materno:</label>
            <input type="text" name="apellidoM" id="apellidoM" class="form-control" required>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="correo">correo:</label>
                <input type="text" name="correo" id="correo" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="telefono">telefono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="form-group">
            <label for="acercaDe">Acerca de mi:</label>
            <input type="text" name="acercaDe" id="acercaDe" class="form-control" required>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        <div class="form-group">
            <label for="fecha_nac">Fecha de nacimiento:</label>
            <input type="date" name="fecha_nac" id="fecha_nac" class="form-control" required>
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="estatura">Estatura:</label>
            <input type="number" name="estatura" id="estatura" class="form-control" required>
        </div>
</div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="number" name="peso" id="peso" class="form-control" required>
        </div>
        </div>
        <div class="col-md-3">
        <div class="form-group">
            <label for="estado_civil">estado civil:</label>
            <input type="text" name="estado_civil" id="estado_civil" class="form-control" required>
        </div>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="vive_con">vivo con:</label>
            <input type="text" name="vive_con" id="vive_con" class="form-control" required>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="dependen">¿Quienes dependen de mi?:</label>
            <input type="text" name="dependen" id="dependen" class="form-control" required>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="curp">curp:</label>
                <input type="text" name="curp" id="curp" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="num_seguro_social">N seguro social:</label>
                <input type="text" name="num_seguro_social" id="num_seguro_social" class="form-control" required>
            </div>
    </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="num_cartilla_mili">N cartilla militar:</label>
                <input type="text" name="num_cartilla_mili" id="num_cartilla_mili" class="form-control" required>
            </div>
    </div>
</div>
<div class="row">
<div class="col-md-6">
            <div class="form-group">
                <label for="afore">Afore:</label>
                <input type="text" name="afore" id="afore" class="form-control" required>
            </div>
        </div>
<div class="col-md-6">
            <div class="form-group">
            <p>Estado de salud:</p>
            <div class="row">
                        <div class="col-sm-4">
                         <label for="Mala">MALA</label>
                        <input type="radio" id="Mala" name="salud" value="Mala">
                        </div>
                        <div class="col-sm-4">
                        <label for="Regular">REGULAR</label>
                        <input type="radio" id="Regular" name="salud" value="Regular">
                        </div>
                        <div class="col-sm-4">
                        <label for="Buena">BUENA</label>
                        <input type="radio" id="Buena" name="salud" value="Buena">
                        </div>
                    </div>
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-6">
            <div class="form-group">
                <label for="pasaporte">Numero de pasaporte:</label>
                <input type="text" name="pasaporte" id="pasaporte" class="form-control" required>
            </div>
        </div>
<div class="col-md-6">
            <div class="form-group">
                <label for="enfermedades">Enfermedades  cronicas:</label>
                <input type="text" name="enfermedades" id="enfermedades" class="form-control" required>
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-12">
            <div class="form-group">
                <label for="deporte">Deportes que practico:</label>
                <input type="text" name="deporte" id="deporte" class="form-control" required>
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-12">
            <div class="form-group">
                <label for="club">clubs a los que pertenezco:</label>
                <input type="text" name="club" id="club" class="form-control" required>
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-12">
            <div class="form-group">
                <label for="pastiempo">Mis pasatiempos:</label>
                <input type="text" name="pastiempo" id="pastiempo" class="form-control" required>
            </div>
        </div>
</div>
<div class="row">
<div class="col-md-12">
            <div class="form-group">
                <label for="metas">Mis metas son:</label>
                <input type="text" name="metas" id="metas" class="form-control" required>
            </div>
        </div>
</div>
    <div class="row">
        <div class="col-md-12 form-group">
        <button type="button" id="btnSubmit" class="btn btn-success btn-md space" data-reg= "guardar">siguiente paso..</button>
    </div>
</div>
</div>
</form> 
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../js/datos.js"></script>
</html>