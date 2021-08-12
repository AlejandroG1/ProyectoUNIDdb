
$(document).ready(function(){
    $("#btnSubmit").click(function (){
        console.log("boton funciona")
        let state = 0;

        $("#registro").find('input').map(function(){
            if($(this).val() == ''){
                $(this).addClass('errores');
                state = 1;
                console.log("cambiado")
                return false;
            }
            
        })
        if(state == 1){
            alert("faltan campos por llenar");
            return false;
        }
         


       let formularioDatos = new FormData()
       formularioDatos.append('registrar', 'registrar')
       formularioDatos.append('usuario',  $('#usuario').val())
       formularioDatos.append('password',  $('#password').val())
       formularioDatos.append('password2',  $('#password2').val())
      
       
           fetch('../../includes/_sesion/validar.php', {
               method: 'POST',
               body: formularioDatos
       })
       .then((res) => res.json())
       .then((response) => {
           if(response === "error"){
            alert("verifica que las credenciales introducidas sean correspondientes a lo que se pide");
           }
           else{
               alert("Te has registrado correctamente inicia sesion para llenar tu informacion :)")
               window.location.href = 'login.php';
           }
                    
        })
         })
//class remove 
    $("#registro").find('input').keyup(function(){
        $(this).removeClass('errores')
        })
     //B
    

})