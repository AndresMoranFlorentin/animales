

document
  .getElementById("form_agregar_comentario")
  .addEventListener("submit", (e) => agregarComentario(e));


function agregarComentario(e) {

  e.preventDefault();
  let data = {
    comentario: document.querySelector("textarea[name=comentario]").value,
    puntaje: document.querySelector("select[name=puntaje]").value,
    id: document.querySelector("input[name=id]").value,
  };

  console.log(data);

  fetch("api/comentario", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  })
  .then(response => {

    getComentario();
})

    .catch((error) => console.log(error));

}

function getComentario() {

  let content = {
    id_: document.querySelector("input[name=id]").value,
    admin: document.querySelector("input[name=permisoAdmin]").value,
  };

  console.log("data id= ", content.id_);
  console.log("permiso_logueo es = ", content.admin);

  fetch("api/comentario/" + content.id_)
    .then(response => response.json())
    .then(comentarios => {
      tabla_comentario.vacio = "false"
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