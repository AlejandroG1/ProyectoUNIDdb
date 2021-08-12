<?php
error_reporting(0);
session_start();


if( !$_SESSION['user'] && !$_SESSION['statusAccount']){
header('location: includes/_sesion/login.php');
}
else{
   header('location: includes/_accounts.php');
}
?>
