"use strict";
let tabla_comentario = new Vue({
    el: "#template-vue-comentarios",
    data: {
        subtitle: "llegaste a la seccion Comentario",
        comentarios: []
    }, methods: {
        borrar: function (event) {
            event.preventDefault();
            if (event) {
                // console.log(event.target.attributes.data_id.value)
                borrarComentario(event.target.attributes.data_id.value);
            }
        }
    }
});

let comentarios_ordenados = new Vue({
    el: "#comentarios_ordenados",
    data: {
        subtitulo:"SE ORDENAN COMO UNO QUIERA",
        comentarios: []
    }
});

function getComentarios() {

    fetch("api/comentario")
        .then(response => response.json())
        .then(comentarios => {
            tabla_comentario.comentarios = comentarios;

        })
        .catch(error => console.log("no se porque no se muestra"));
}

getComentarios();

document.getElementById("form_orden_de_puntaje").addEventListener("submit", ordenarComentarios);


function ordenarComentarios(e){

 e.preventDefault();

 let data = {
    que_orden: document.querySelector("select[name=orden]").value,

}
console.log(data);

 fetch('api/comentario?orden=ascendente')
        .then(response => response.json())
        .then(comentarios => {
            comentarios_ordenados.comentarios = comentarios;

        })
        .catch(error => console.log("no se porque no se muestra"));
}


//alert(document.getElementById("form-agregar-comentario"));
/*document.getElementById("form-agregar-comentario").addEventListener("submit", agregarComentario);

function agregarComentario(e) {
    e.preventDefault();



    let data = {
        comentario: document.querySelector("textarea[name=comentario]").value,
        puntaje: document.querySelector("select[name=puntaje]").value,
        id: document.querySelector("input[name=id]").value

    }

    console.log(data);

    fetch("api/comentario", {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then(response => {
            getComentarios();
        })
        .catch(error => console.log("error algo no funciona"));

}*/

function borrarComentario(id) {

    fetch("api/comentario/" + id, {
        method: 'DELETE',
        headers: { 'Content-Type': 'application/json' },
        // body: JSON.stringify(data)

    })
        .then(response => {
            console.log(response);
            getComentarios();
        })
        .catch(error => console.log("error algo no funciona"));


}
//document.getElementById("borrar_comentario").addEventListener("click", (e) => borrarComentario(e));
