function generalForm(dataResponse) {
    $("#skills").html("");
    if(dataResponse.status === "2"){
        $("#skills").addClass('esconder');
        $("#form3").removeClass('esconder');
    } 
    if(dataResponse.status === "3"){
        alert("completaste el segundo formulario pasemos al siguiente");
    }

}

function selectData(tabla) {
    console.log(tabla)
    if(tabla == 'skills'){
        var formularioDatos = new FormData()
        formularioDatos.append('accion', 'select_Data')
        formularioDatos.append('usuario',  $('#usuario').val())
        formularioDatos.append('tabla',  tabla)
}
fetch('../../includes/_functions.php', {
    method: 'POST',
    body: formularioDatos
})
.then((res) => res.json())
.then((response) => {
    let html = ``;
    response.map(function(i){
  

       html += `    <tr> 
       <td>${i.nomskill}</td>
       <td>${i.descripcion_habilidad}</td>
       <td>${i.nivel_dominio}</td>
       <td>
       <a  href="#" class="editar">
       <div">
       Editar
       </div>
       </a>
       <a>|</a>
       <a href="#" class="eliminar">
       <div">
       Eliminar
       </div>
       </a>
       </td>
       </tr>`
    })
       $("#table-data tbody").html(html);
})

}
$(document).ready(function(){
    $("#btnSubmit").click(function (){
        console.log("boton funciona")
        let state = 0;

        $("#skills").find('input').map(function(){
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
         


        
   
         })
    $("#btnAdd").click(function (){
        let formularioDatos = new FormData()
       formularioDatos.append('accion', 'insertar_skills')
       formularioDatos.append('usuario',  $('#usuario').val())
       formularioDatos.append('nomskill',  $('#nomskill').val())
       formularioDatos.append('descskills',  $('#descskills').val())
       formularioDatos.append('dominio',  $('#dominio').val())

       fetch('../../includes/_functions.php', {
               method: 'POST',
               body: formularioDatos
       })
       .then((res) => res.json())
       .then((response) => {
            console.log("se mostrara en la tabla de arriba tus habilidades")
            selectData(response.table);
        })


    })
//class remove 
    $("#skills").find('input').keyup(function(){
        $(this).removeClass('errores')
        })
     //B
    

})