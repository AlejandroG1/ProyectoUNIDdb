function selectData(tabla) {
    console.log('tabla')

        var formularioDatos = new FormData()
        formularioDatos.append('accion', 'select_Data')
        formularioDatos.append('tabla',  "experiencia")

fetch('../includes/_functions.php', {
    method: 'POST',
    body: formularioDatos
})
.then((res) => res.json())
.then((response) => {
    let html = ``;
    response.map(function(e){
  

       html += `    <tr> 
       <td>${e.empresa_experiencia}</td>
       <td>${e.puesto_trabajo}</td>
       <td>${e.descripcion_experiencia}</td>
       <td>${e.Tiempo_dedicado}</td>
       <td>${e.Contacto_empresa}</td>
       <td>${e.motivo_separacion}</td>
       <td>${e.nombre_jefe}</td>
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
$(document).ready(function (){

    $("#btnAdd").click(function (){
        let formularioDatos = new FormData(document.forms.namedItem("exp"))
       formularioDatos.append('accion', 'agregar_btn')
       formularioDatos.append('addType', 'experiencia')
    
       fetch('../includes/_functions.php', {
               method: 'POST',
               body: formularioDatos
       })
       .then((res) => res.json())
       .then((response) => {
            console.log("se mostrara en la tabla de arriba tu experiencia")
            selectData();
        })
    
    
    })
    $("#btnSubmit").click(function(){
        if(confirm("Esta seguro que desea terminar este formulario(Ya no podra cambiar nada)")){
            let formularioDatos = new FormData()
            formularioDatos.append('accion', 'accountState');
            fetch('../includes/_functions.php', {
                method: 'POST',
                body: formularioDatos
        }).then((res) => res.json())
        .then((response) => {
            if(response == "completado"){
                window.location.href = '../includes/_accounts.php';
            }
            else {
                alert("algo salio mal");
            }
        })
        }
        else{
            alert("MANTENIENDO")
        }
    })
    selectData();   
})
