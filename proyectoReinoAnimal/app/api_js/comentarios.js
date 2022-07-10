"use strict";
//console.log(document.getElementById('template-vue-comentarios'));

let tabla_comentario = new Vue({
    el: "#template-vue-comentarios",
    data: {
        permiso: '',
        comentarios: []
        
    }, methods: {
        borrar: function (event) {
            event.preventDefault();
            if (event) {
                // console.log(event.target.attributes.data_id.value)
                borrarComentario(event.target.attributes.data_id.value);
                console.log("aqui se muestra el id del boton borrar: ");
                console.log(event.target.attributes.data_id.value);
            }
        }
    }
});
function getComentario() {
        
    let content={
    id_: document.querySelector("input[name=id]").value,
    admin: document.querySelector("input[name=permisoAdmin]").value,
    };

    console.log("data id= ",content.id_);
    console.log("permiso_logueo es = ",content.admin);

    fetch("api/comentario/"+content.id_)
        .then(response => response.json())
        .then(comentarios => {
            tabla_comentario.permiso = content.admin;
            tabla_comentario.comentarios = comentarios;
         console.log(comentarios);
        })
        .catch(error => console.log(error));
}

/*function getComentarios() {

    fetch("api/comentario")
        .then(response => response.json())
        .then(comentarios => {
            tabla_comentario.comentarios = comentarios;

        })
        .catch(error => console.log("no se porque no se muestra"));
}*/

getComentario();



//alert(document.getElementById("form-agregar-comentario"));

function borrarComentario(id) {
     console.log("el id es: ",id)
    fetch("api/comentario/"+id, {
        method: 'DELETE',
        headers: { 'Content-Type': 'application/json' },
        // body: JSON.stringify(data)

    })
        .then(response => {
            console.log(response);
            getComentario();
        })
        .catch(error => console.log(error));


}
//document.getElementById("borrar_comentario").addEventListener("click", (e) => borrarComentario(e));
