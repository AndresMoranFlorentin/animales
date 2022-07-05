//"use strict";
//document.getElementById("form_agregar_comentario").addEventListener("submit", (e) => agregarComentario(e));

/*function agregarComentario(e) {

    e.preventDefault();
    console.log(data);
    let data = {
        comentario: document.querySelector("textarea[name=comentario]").value,
        puntaje: document.querySelector("select[name=puntaje]").value,
        id: document.querySelector("input[name=id]").value

    }

    fetch("api/comentario", {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then(response => {
            console.log(response);
        })
        .catch(error => console.log(error));

}
*/