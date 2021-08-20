<?php 
session_start();


if($_SESSION['user'] && $_SESSION['statusAccount'] && $_SESSION['curriculum'])

    if($_SESSION['curriculum'] == '1'){
        header('Location: ../views/cv');
    }
    if($_SESSION['curriculum'] == '2'){
        header('Location: ../views/cv2');
    }
    if($_SESSION['curriculum'] == '2'){
        header('Location: ../views/cv3');
    }
    
?>