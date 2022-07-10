"use strict";

let comentarios_ordenados = new Vue({
    el: "#comentarios_ordenados",
    data: {
        comentarios: []
    }
});

document.getElementById("form_orden_de_puntaje").addEventListener("submit", (e) => ordenarComentarios(e));


function ordenarComentarios(e) {

    e.preventDefault();

    let data = {
        que_orden: document.querySelector("select[name=orden]").value,
    }

    fetch('api/comentario/:ID/orden/:'+data.que_orden)
        .then(response => {
      
           return response.json();
        
        })
       
        .then(comentarios => {
            comentarios_ordenados.comentarios = comentarios;

        })
        .catch(error => console.log(error));
}
