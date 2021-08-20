<?php 
session_start();
$statusSesion = $_SESSION['statusAccount'];
$userSesion = $_SESSION['user'];

if($statusSesion !== '4'){
    if($userSesion == null || $userSesion == ''){
        echo 'No puedes estar en esta pagina inicia sesion para rederigirte a correctamente';
        die();
    }
    else {
        header('Location: ../includes/_accounts.php');
    }
}
?>

<div class="container">
<h3 class="text-center">MIS HABILIDADES</h3> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div id="skills" >
<input type="text" name="skills" id="skills" value="null" class="usuario">
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


<div class="row justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="form-group">
            <label for="usuario">nombre_habilidad:</label>
            <input type="text" name="nomskill" id="nomskill" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="usuario">descripcion_habilidad:</label>
            <input type="text" name="descskills" id="descskills" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="usuario">nivel_dominio:</label>
            <input type="text" name="dominio" id="dominio" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 form-group">
        <button type="button" id="ctn" class="btn btn-success btn-md space">siguiente paso..</button>
    </div>
    <div class="col-md-4 form-group">
    <button type="button" id="btnAdd" class="btn btn-danger btn-md space">Agregar Habilidades</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../../js/skills.js"></script>
    </div>
</div>
</div>
