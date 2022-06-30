"use strict";


let tabla_comentario = new Vue({
    el: "#template-vue-comentarios",
    data: {
        subtitle: "llegaste a la seccion Comentario de nuevo",
        comentarios: [] 
    }
});
getComentarios();

function getComentarios() {
    fetch("api/comentario/")
    .then(response => response.json())
    .then(comentarios => {
        tabla_comentario.comentarios = comentarios; 
    })
    .catch(error => console.log(error));
}
