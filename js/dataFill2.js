function fillPersonal() {

    var datos = new FormData()
    datos.append('accion', 'fillData');
    datos.append('fill', 'datosBasic');
    
    fetch('../.././includes/_functions.php', {
        method: 'POST',
        body: datos
    })
    .then((res) => res.json())
    .then((response) => {
        let nameFull = ``;
        let contacto = ``;
        let acercade = ``;
        let pasatiempo = ``;
        response.map(function(e){
    
        pasatiempo +=`<p>${e.pasatiempo}</p>`
        acercade+=`${e.AcercaDe}`
        nameFull += `
        <h3>${e.Nombres}</h3>
        <h3>${e.ApellidoP} ${e.ApellidoM}</h3>`;
        contacto += ` 
        <p>correo: ${e.Correo}</p>
        <p>Telefono: ${e.Telefono}</p>
        <p>Direccion: ${e.Direccion}</p>   
        `
    
                    })
                        $("#acerca p").html(acercade);
                        $("#name").html(nameFull);
                        $("#contact").html(contacto);
                        $("#pasatiempo").html(pasatiempo);
    })
    
    
    } 
    function fillSkills() {
        var datos = new FormData()
        datos.append('accion', 'fillData');
        datos.append('fill', 'datosSkills');
        
        fetch('../.././includes/_functions.php', {
            method: 'POST',
            body: datos
        })
        .then((res) => res.json())
        .then((response) => {
            skills = ``;
            response.map(function(e){
    
    
                    skills += `
                    <div class="row">
                    <p class="col-4 texto-user">${e.nombre_habilidad}</p>
                    <p class="col-4 texto-user">${e.nivel_dominio}</p>
                    <p class="col-4 texto-user">${e.descripcion_habilidad}</p>
                    </div>
                    <br>
                    `;
            })
            $("#skill").html(skills);
        })
    
    
    }
    function fillLenguajes() {
        var datos = new FormData()
        datos.append('accion', 'fillData');
        datos.append('fill', 'datosIdiomas');
        
        fetch('../.././includes/_functions.php', {
            method: 'POST',
            body: datos
        })
        .then((res) => res.json())
        .then((response) => {
            let idiomas = ``;
            response.map(function(e){
    
               idiomas += `
               
               <div class="row">
               <p class="col-4 texto-user">${e.idioma}</p>
               <p class="col-4 texto-user">${e.nivel}</p>
               <p class="col-4 texto-user">${e.certificado}</p>
           </div>
               
               `
    
            })
            $("#idi").html(idiomas);
        })
    }
    function fillExperiencia() {
    
        var datos = new FormData()
        datos.append('accion', 'fillData');
        datos.append('fill', 'datosExperiencia');
        
        fetch('../.././includes/_functions.php', {
            method: 'POST',
            body: datos
        })
        .then((res) => res.json())
        .then((response) => {
            experiencia = ``;
            response.map(function(e){
            
                experiencia +=  `
                <div class="row">
                <p class="col-4 texto-user">${e.empresa_experiencia}</p>
                <p class="col-4 texto-user" > ${e.descripcion_experiencia}</p>
                <p class="col-4 texto-user">${e.Tiempo_dedicado}</p>
            </div>
            <br>
    
                `
    
            })
            $("#exp").html(experiencia);
        })
    
    }
    function fillEducacion() {
        var datos = new FormData()
        datos.append('accion', 'fillData');
        datos.append('fill', 'datosEducacion');
        
        fetch('../.././includes/_functions.php', {
            method: 'POST',
            body: datos
        })
        .then((res) => res.json())
        .then((response) => {
            let edu = ``;
    
            response.map(function(e){
                edu += `
                <div class="row">
                <p class="col-4 texto-user">${e.nombre_institucion}</p>
                <p class="col-4 texto-user" > ${e.descripcion_estudio}</p>
                <p class="col-4 texto-user">${e.tiempo_cursado}</p>
              </div>
                  <br>
                `;
            })
            $("#edu").html(edu);
        })
    }

    
$(document).ready(function () {

    fillPersonal();
    fillSkills();
    fillExperiencia();
    fillEducacion();
    fillLenguajes();
});