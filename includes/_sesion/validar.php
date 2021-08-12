 <?php
require_once ("../_db.php");
/**
 * Validacion de datos para poder iniciar sesion
 */
if(isset ($_POST['login'])){

$user=$_POST['user'];
$password=$_POST['password'];
global $conexion;
$consulta="SELECT*FROM acceso_usuarios where user='$user' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    $row = mysqli_fetch_assoc($resultado);
       $userData = [
            "user" => $row['user'],
            "status" => $row['status']
        ];
        
    session_start();
    $_SESSION['user']=$userData["user"];
    $_SESSION['statusAccount']= $userData["status"];

    if( $_SESSION['statusAccount'] &&  $_SESSION['user']){
        header('location: ../../includes/_accounts.php');
    }
else{
    echo "no";
    echo $_SESSION['statusAccount'];
    session_destroy();
}   
echo "hola";
}
else {
    echo "fallo";
}
}
?>
  
  <?php

  /**
   * Parte de registro de usuarios
   */
  if(isset ($_POST['registrar'])){
    global $conexion;
if (strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['password2']) >= 1 ) {
    
    $usuario = trim($_POST['usuario']);
      $password = trim($_POST['password']);
      $password2 = trim($_POST['password2']);
       
        if(strcmp($password, $password2) !== 0 ){
            echo json_encode("error");
            
        } else
        {
            $consulta = "INSERT INTO acceso_usuarios (user, password, status)
             VALUES ('$usuario', '$password', 2)";
            mysqli_query($conexion, $consulta);

            $consulta2 = "SELECT user from acceso_usuarios where user = '$usuario'";
             $result = mysqli_query($conexion, $consulta2);

             $row = mysqli_fetch_assoc($result);

                $datosFinal = [
                "user" => $row['user']
                ];
                echo json_encode($datosFinal);  
                
        }
 }
}
?>