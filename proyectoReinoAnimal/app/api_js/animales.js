"use strict";


let tabla_animal = new Vue({
    el: "#template-vue-animales",
    data: {
        animales: [] 
    }
});


function getAnimales() {
    fetch("api/home")
    .then(response => response.json())
    .then(animales => {
        tabla_animal.animales = animales; 
    })
    .catch(error => console.log(error));
}

/*function getAnimales() {
    fetch('api/home/')
        .then(response => response.json())
        .then(animales => {
            let content = document.querySelector(".tabla-animal");
            content.innerHTML = "";
            for (let animal of animales) {
                content.innerHTML += crearTablaAnimal(animal);
            }
        })
        .catch(error => console.log(error));
}*/
getAnimales();

function crearTablaAnimal(animal) {

    let element = "";
    element += `<td>${animal.nombre}</td>`
    element += `<td>${animal.descripcion}</td>`
    element += `<td>${animal.alimentacion}</td>`
    element += `<td>${animal.habitat}</td>`
    
    element = `<tr>${element}</tr>`;

    return element;
}

