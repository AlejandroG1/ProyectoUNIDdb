function selectData(tabla) {
    console.log('tabla')

        var formularioDatos = new FormData()
        formularioDatos.append('accion', 'select_Data')
        formularioDatos.append('tabla',  "habilidades")

fetch('../includes/_functions.php', {
    method: 'POST',
    body: formularioDatos
})
.then((res) => res.json())
.then((response) => {
    let html = ``;
    response.map(function(a){
  

       html += `    <tr> 
       <td>${a.nombre_habilidad}</td>
       <td>${a.descripcion_habilidad}</td>
       <td>${a.nivel_dominio}</td>
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
        let formularioDatos = new FormData(document.forms.namedItem("habilidades"))
       formularioDatos.append('accion', 'agregar_btn')
       formularioDatos.append('addType', 'habilidades')
    
       fetch('../includes/_functions.php', {
               method: 'POST',
               body: formularioDatos
       })
       .then((res) => res.json())
       .then((response) => {
            console.log("se mostrara en la tabla de arriba tus habilidades      ")
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
