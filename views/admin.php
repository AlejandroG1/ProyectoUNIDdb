<?php
session_start();
if($_SESSION['user'] !== 'admin'){


    echo "no puedes estar aqui";
    die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" media="all">

    <title>Document</title>
</head>
<body>
    <h1 class="text-center">REGISTROS</h1>
    <H2 class="text-center">Puedes eliminar usuarios</H2>
    <div class="table-responsive">
                     <table class="table table-striped table-hover" id="table-data">
                         <thead>    
                         <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Status</th>
                        <th>Fecha de registro</th>
                        <th>Tipo de cuenta</th>
                        <th>Curriculum</th>
                        <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                         </tbody>
                         </table>
</div>

</body>
</html>