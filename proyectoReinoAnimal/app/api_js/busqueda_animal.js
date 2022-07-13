"use strict";


let animales_encontrados = new Vue({
    el: "#animales_encontrados",
    data: {
        encontrado:false,
        animales: []
    }
});

document.getElementById("form_busqueda_avanzada_Nombre").addEventListener("submit", (e) => buscarPalabraColNombre(e))

function buscarPalabraColNombre(e){
    e.preventDefault();


    let data = {
        palabra: document.querySelector("input[name=nombre]").value,
        accion:'nombre'
    }
console.log("palabra : ",data.palabra);

    fetch('api/animal/accion/' + data.accion + '/palabra/' + data.palabra)
        .then(response => {

     console.log(response);

           return response.json();
        
        })
       
        .then(animal => {
            if (animal.length > 0){
            animales_encontrados.encontrado = true;
            animales_encontrados.animales = animal;
            }
            else{
                animales_encontrados.encontrado = false;
            }
            console.log(animal.length);
            document.querySelector("input[name=nombre]").value="";
        })
        .catch(error => console.log(error));
}

document.getElementById("form_busqueda_avanzada_Descripcion").addEventListener("submit", (e) => buscarColDescripcion(e))

function buscarColDescripcion(e){
    e.preventDefault();


    let data = {
        palabra: document.querySelector("input[name=descripcion]").value,
        accion: 'descripcion'
    }
console.log("palabra : ",data.palabra);

    fetch('api/animal/accion/' + data.accion + '/palabra/' + data.palabra)
        .then(response => {

     console.log(response);

           return response.json();
        
        })
       
        .then(animal => {
            if (animal.length > 0){
                animales_encontrados.encontrado = true;
                animales_encontrados.animales = animal;
                }
                else{
                    animales_encontrados.encontrado = false;
                }
                console.log(animal.length);
                document.querySelector("input[name=descripcion]").value="";
        })
        .catch(error => console.log(error));
}

document.getElementById("form_busqueda_avanzada_Alimentacion").addEventListener("submit", (e) => buscarColAlimentacion(e))

function buscarColAlimentacion(e){
    e.preventDefault();
    let data = {
        palabra: document.querySelector("input[name=alimentacion]").value,
        accion: 'alimentacion'
    }
console.log("palabra : ",data.palabra);

    fetch('api/animal/accion/' + data.accion + '/palabra/' + data.palabra)
        .then(response => {

     console.log(response);

           return response.json();
        
        })
       
        .then(animal => {
            if (animal.length > 0){
                animales_encontrados.encontrado = true;
                animales_encontrados.animales = animal;
                }
                else{
                    animales_encontrados.encontrado = false;
                }
                console.log(animal.length);
                document.querySelector("input[name=alimentacion]").value="";
        })
        .catch(error => console.log(error));
}