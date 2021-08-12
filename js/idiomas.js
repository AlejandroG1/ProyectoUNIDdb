function selectData(tabla) {
    console.log(tabla)

        var formularioDatos = new FormData()
        formularioDatos.append('accion', 'select_Data')
        formularioDatos.append('tabla',  "idiomas")

fetch('../includes/_functions.php', {
    method: 'POST',
    body: formularioDatos
})
.then((res) => res.json())
.then((response) => {
    let html = ``;
    response.map(function(i){
  

       html += `    <tr> 
       <td>${i.idioma}</td>
       <td>${i.nivel}</td>
       <td>${i.certificado}</td>
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
        let formularioDatos = new FormData(document.forms.namedItem("idiomas"))
       formularioDatos.append('accion', 'agregar_btn')
       formularioDatos.append('addType', 'idiomas')
    
       fetch('../includes/_functions.php', {
               method: 'POST',
               body: formularioDatos
       })
       .then((res) => res.json())
       .then((response) => {
            console.log("se mostrara en la tabla de arriba tus idiomas")
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
