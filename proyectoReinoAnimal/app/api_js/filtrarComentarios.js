"use strict";

let comentarios_filtrados = new Vue({
    el: "#comentarios_filtrados",
    data: {
        subtitle:"Dependiendo de sus valores puede que no aparesca ningun comentario",
        comentario: []
    }
});

document.getElementById("form_puntaje").addEventListener("submit", (e) => selectPuntuacion(e))

function selectPuntuacion(e){
    e.preventDefault();

    let dato = {
         puntuacion:document.querySelector("select[name=puntuacion]").value,
    }
    console.log("usted eligio= ",dato.puntuacion);

    fetch("api/comentario/:ID/puntuacion/" + dato.puntuacion)
        .then(response => {
      
            return response.json();
         
         })
        
         .then(comentario => {
           
             comentarios_filtrados.comentario = comentario;
 
         })
         .catch(error => console.log(error));
}

//
