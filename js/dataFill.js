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

    pasatiempo +=`<li> <p>${e.pasatiempo}</p></li>`
    acercade+=`${e.AcercaDe}`
    nameFull += `${e.Nombres} ${e.ApellidoP} ${e.ApellidoM}`;
    contacto += ` <li>
                        <span class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                        <span class="text">${e.Telefono}</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="text">${e.Correo}</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                        <span class="text">${e.Direccion}</span>
                    </li>`

                })
                    $("#acerca p").html(acercade);
                    $("#name h2").html(nameFull);
                    $("#contact ul").html(contacto);
                    $("#pasa ul").html(pasatiempo);
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


                skills += `<div class="box">
                <div class="yearCompany">
                    <h5>${e.nombre_habilidad}</h5>
                    <h5>DOMINIO: ${e.nivel_dominio}</h5>
                </div>
                <div class="text">
                    <p>${e.descripcion_habilidad}</p>
                </div>
                </div>`;
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
        <li>
            <span class="text">IDIOMA: ${e.idioma} NIVEL: ${e.nivel} CERTIFICADO: ${e.certificado}</span>
        </li> <br>`

        })
        $("#idi ul").html(idiomas);
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
            <div class="box">
                    <div class="yearCompany">
                        <h5>${e.Tiempo_dedicado}</h5>
                        <h5>${e.empresa_experiencia}</h5>
                    </div>
                    <div class="text">
                        <h4>${e.puesto_trabajo}</h4>
                        <p>${e.descripcion_experiencia}</p>
                    </div>
                </div>

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
            <li>
            <h4>${e.nombre_institucion}</h4>
                <h5>${e.tiempo_cursado}</h5>
                <h4>${e.descripcion_estudio}</h4>
            </li>
            `;
        })
        $("#edu ul").html(edu);
    })
}

$(document).ready(function () {

    fillPersonal();
    fillSkills();
    fillExperiencia();
    fillEducacion();
    fillLenguajes();
});