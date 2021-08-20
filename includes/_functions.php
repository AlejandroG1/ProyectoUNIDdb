<?php
   
require_once ("_db.php");
session_start();

    if (isset($_POST['accion'])){ 
        
        switch ($_POST['accion']){
            case 'datosUsuario':
                datosUsuario();
                break;    
                
            case 'agregar_btn':
                agregar_btn();

            break;        
            case 'select_Data':
                select_Data();
            break;
            case 'accountState':
            accountState();
            break;  
            case 'fillData':
                fillData();
            break;
        }

    }
function datosUsuario(){
    global $conexion;
    extract($_POST);
 
    $sesion = $_SESSION['user'];
        $sqlInsert = "INSERT INTO datos_usuarios (usuario_acceso, Nombres, apellidoP, apellidoM, Correo, Telefono, Direccion, AcercaDe, fecha_nac, estatura, peso, estado_civil, vive_con, dependen, curp, num_seguro_social, num_cartilla_mili, num_pasaporte, AFORE, estado_salud, enfermedades_cronicas, deportes, clubs, pasatiempo, meta_vida) VALUES 
                                                ('$sesion', '$nombres', '$ApellidoP', '$apellidoM', '$correo', '$telefono', '$direccion', '$acercaDe', '$fecha_nac', '$estatura', '$peso', '$estado_civil', '$vive_con', '$dependen', '$curp', '$num_seguro_social', '$num_cartilla_mili', '$pasaporte', '$afore', '$salud', '$enfermedades', '$deporte', '$club', '$pastiempo', '$metas');";
        if(!mysqli_query($conexion, $sqlInsert)){
            echo json_encode("error");
        }   
        else{
                accountState();
            
        }
        
   


}
function accountState() {
    global $conexion;
    $sesion = $_SESSION['user'];
    if ($sesion !== null || $sesion !== ''){
        $_SESSION['statusAccount'] += 1;
        $status = $_SESSION['statusAccount'];

        $sqlUpdateUser = "UPDATE acceso_usuarios SET status='$status' WHERE user = '$sesion';";
            if(!mysqli_query($conexion, $sqlUpdateUser)){
                echo json_encode("error");
            }
            else{
               echo json_encode("completado");
            }
    }
   
}
function currState() {
    global $conexion;
    $sesion = $_SESSION['curriculum'];
    if ($sesion !== null || $sesion !== ''){
        $_SESSION['statusAccount'] += 1;
        $curriculum = $_SESSION['statusAccount'];

        $sqlUpdateUser = "UPDATE acceso_usuarios SET tipo_curriculum='$curriculum' WHERE user = '$sesion';";
            if(!mysqli_query($conexion, $sqlUpdateUser)){
                echo json_encode("error");
            }
            else{
               echo json_encode("completado");
            }
    }
}
function agregar_btn() {
    global $conexion;
    extract($_POST);
    $sesion = $_SESSION['user'];  
    
    
    if(isset($_POST['addType'])){
        switch($_POST['addType']){
            case 'idiomas':
                $sql = "INSERT INTO idiomas_usuarios (usuario, idioma, nivel, certificado) VALUES ('$sesion','$idioma','$nivel','$certificado');";
            break;
            case 'habilidades':
                $sql = "INSERT INTO habilidades_usuarios (usuario, nombre_habilidad, descripcion_habilidad, nivel_dominio) 
                VALUES ('$sesion','$nombre_habilidad','$descripcion_habilidad','$nivel_dominio');";
            break;
            case 'educacion':
                $sql = "INSERT INTO educacion_usuarios (usuario, nombre_institucion, descripcion_estudio, tiempo_cursado) 
                VALUES ('$sesion','$nombre_institucion','$descripcion_estudio','$tiempo_cursado');";
            break;
            case 'experiencia':
                $sql = "INSERT INTO experiencia_usuarios (usuario, empresa_experiencia, puesto_trabajo, descripcion_experiencia, Tiempo_dedicado, Contacto_empresa, motivo_separacion, nombre_jefe)
                VALUES ('$sesion', '$empresa_experiencia', '$puesto_trabajo', '$descripcion_experiencia', '$Tiempo_dedicado', '$Contacto_empresa', '$motivo_separacion', '$nombre_jefe');";
           break;
           case 'parentesco':
                $sql = "INSERT INTO parentescos_usuario (usuario, nombres, apellido_m, apellido_p, direccion, telefono, tipo_parentesco)
                VALUES ('$sesion', '$nombres', '$apellido_m', '$apellido_p', '$direccion', '$telefono', '$parentesco');";    
            break;              
    
                                
        
        }
     $respuesta = ['type' => 'success',
               'tittle' => 'operacion finalizada',
               'text' => 'correctamente insertado',
               'table' => $_POST['addType']];
    
              if(!mysqli_query($conexion, $sql)){
              $respuesta = ['type' => 'error',
                'tittle' => 'operacion interrumpida',
                'text' => mysqli_error($conexion)];
                

        }
        echo json_encode($respuesta);
        }
}
function select_Data(){
    global $conexion;
    extract($_POST);
    $sesion = $_SESSION['user'];
    if(isset($_POST['tabla'])){
        $sql = "SELECT *";
        switch($_POST['tabla']){
            case 'idiomas':
                $seleccion = " FROM idiomas_usuarios WHERE usuario = '$sesion';";
                break;
                case 'habilidades':
                $seleccion = " FROM habilidades_usuarios WHERE usuario = '$sesion';";
                break;
                case 'educacion':
                    $seleccion = " FROM educacion_usuarios WHERE usuario = '$sesion';";
                break;
                case 'experiencia':
                    $seleccion = " FROM experiencia_usuarios WHERE usuario = '$sesion';";
                break;
                case 'parentesco':
                    $seleccion = " FROM parentescos_usuario WHERE usuario = '$sesion';";
                break;
        }
       $sql .= $seleccion;
       $finalSql = mysqli_query($conexion, $sql);
            if (mysqli_num_rows($finalSql)>0)
            {    
                while ($dato = mysqli_fetch_assoc($finalSql) ){
                 $datos[] = $dato;
            }
        echo json_encode($datos);
        }
       else {
        echo json_encode('error');
     }
    }
}
function fillData(){
    global $conexion;
    extract($_POST);
    $sesion = $_SESSION['user'];
        if(isset($_POST['fill'])){
            switch($_POST['fill']){
                case 'datosBasic':
                    $sql = "SELECT * FROM datos_usuarios WHERE usuario_acceso ='$sesion' LIMIT 1;";
                    break;
                case 'datosSkills':
                    $sql = "SELECT * FROM habilidades_usuarios WHERE usuario = '$sesion' LIMIT 3;";
                    break;
                case 'datosEducacion':
                    $sql = "SELECT * FROM educacion_usuarios WHERE usuario = '$sesion' LIMIT 3; ";
                    break;
                case 'datosIdiomas':
                    $sql = "SELECT * FROM idiomas_usuarios WHERE usuario = '$sesion' LIMIT 3;";
                    break;
                case 'datosExperiencia':
                    $sql = "SELECT * FROM experiencia_usuarios WHERE usuario = '$sesion' LIMIT 3;";
                    break;
                case 'datosParentescos':
                    $sql = "SELECT * FROM parentescos_usuarios WHERE    usuario_acceso = '$sesion' LIMIT 3;";
                    break;
            }

            $Datos = mysqli_query($conexion, $sql);
            if (mysqli_num_rows($Datos)>0)
            {    
                while ($Dato = mysqli_fetch_assoc($Datos) ){
                 $Print[] = $Dato;
                }
                 echo json_encode($Print);
            }
            else {
                  echo json_encode('error');
             }

        }
}
?>