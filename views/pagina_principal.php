<?php
session_start();
$statusSesion = $_SESSION['statusAccount'];
$curriculum = $_SESSION['curriculum'];
if($statusSesion !== '8'){
  echo 'No puedes estar en esta pagina inicia sesion para rederigirte a correctamente';
   die();
}
if($curriculum !== '0'){

header('Location: ../includes/_curriculum.php');

}
?>
<!doctype html>
<html lang="es-MX">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Plantillas</title>
  </head>
  <body>
      <!-- inicio menu -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <?php 
                if ($_SESSION['user'] == 'admin'){
                  ?>
                  <li class="nav-item">
                  <a class="nav-link" href="admin.php">Admin console</a>
                  </li>
               <?php 
                }
                ?>


            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-success" type="submit">Log Out</button>
            </form>
            </div>
        </div>
        </nav>
    </div>
      <!-- fin menu -->

      <!-- contenido -->
      <div class="container">
          <div class="row">
              <div class="col-md-4 mt-5">
              <div class="card" style="width: 18rem;">
            <img src="../img/plantilla1.png">
            <div class="card-body">
                <h5 class="card-title">Plantilla 1</h5>
                <p class="card-text">encargado de elaborar la plantilla: Francisco ivan.</p>
                <a href="cv/index.php" data-id="1" class="btn btn-primary">Seleccionar</a>
            </div>
            </div>
              </div>
              <div class="col-md-4 mt-5">
              <div class="card" style="width: 18rem;">
            <img src="../img/plantilla2.png">
            <div class="card-body">
                <h5 class="card-title">Plantilla 2</h5>
                <p class="card-text">encargado de elaborar la plantilla: Jose Alejandro.</p>
                <a href="cv2/index.php" data-id="2" class="btn btn-primary">Seleccionar</a>
            </div>
            </div>
              </div>
              <div class="col-md-4 mt-5">
              <div class="card" style="width: 18rem;">
            <img src="../img/plantilla4.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Plantilla 3</h5>
                <p class="card-text">encargado de elaborar la plantilla: Priscafer Emmanuel.</p>
                <a href="cv3/index.php" data-id="3" class="btn btn-primary">Seleccionar</a>
            </div>
            </div>
              </div>
          </div>
      </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>