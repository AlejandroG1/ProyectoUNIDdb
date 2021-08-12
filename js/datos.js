$(document).ready(function() {

    $("#btnSubmit").click(function(){
        let state = 0;

        $("#datos").find('input').map(function(){
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
        var salud = $('input[name="salud"]:checked').val();
        let formulario = new FormData(document.forms.namedItem("datos"))
        formulario.append('salud', salud)
        formulario.append('accion', 'datosUsuario')

        fetch('../includes/_functions.php', {
            method: 'POST',
            body: formulario
    })
    .then((res) => res.json())
    .then((response) => {
        if(response === "error"){
        alert("Hubo un error al guardar tus datos");
        }
        else{
            alert("datos basicos insertados correctamente contina a la siguiente parte");
            window.location.href = '../includes/_accounts.php';
        }
                
    })
    })
    $("#datos").find('input').keyup(function(){
        $(this).removeClass('errores')
        })
})