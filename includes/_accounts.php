<?php 
session_start();
    
if($_SESSION['user'] && $_SESSION['statusAccount']){

    if($_SESSION['statusAccount'] == "2"){
        header('location: ../views/datos.php');
    }
    if($_SESSION['statusAccount'] == "3"){
        header('location: ../views/idiomas.php');
    }
    if($_SESSION['statusAccount'] == "4"){
        header('location: ../views/habilidades.php');
    }
    if($_SESSION['statusAccount'] == "5"){
        header('location: ../views/educacion.php');
    }
    if($_SESSION['statusAccount'] == "6"){
        header('location: ../views/experiencia.php');
    }
    if($_SESSION['statusAccount'] == "7"){
        header('location: ../views/parentesco.php');
    }
    if($_SESSION['statusAccount'] == "8"){
        header('location: ../views/pagina_principal.php');
    }
    
}
?>