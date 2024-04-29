//Gestionar datos locales
function guardar_preferencias(){
    // Le ponemos nombre1 para que no se confunda con el nombre de la variable global
let nombre1 = document.getElementById("nombre").value;
// Guardamos el nombre en el almacenamiento local, le ponemos nombre_del_usuario para que no se confunda con el nombre de la variable global
localStorage.setItem("nombre_del_usuario", nombre1);
// Recuperar color de fondo
// el document sirve para recuperar el valor del color de fondo, el getelementbyid sirve para recuperar el valor del color de fondo
let color1 = document.getElementById("color").value;
localStorage.setItem("color_fondo", color1);
// recuperar el codigo de la fuente
let fuente1 = document.getElementById("fontSize").value;
localStorage.setItem("tamanio_fuente", color1);
}

function cargar_preferencias(){
    // Recuperar el nombre del usuario
    let nombre1 = localStorage.getItem("nombre_del_usuario");
    // recuperar color de fondo
    let color1 = localStorage.getItem("color_fondo");
    // recuperar el tamanio de la fuente
    let fuente1 = localStorage.getItem("tamanio_fuente");

    // validacion de datos locales
    if(nombre1 && color1 && fuente1){
        document.body.style.backgroundColor = color1;
        document.body.style.fontSize = fuente1;
        // Mostrar el nombre de usuario en la pagina
        let div_nombre1 = document.getElementById("div_nombre");
        div_nombre1.innerHTML = "Bienvenido usuario " + nombre1;
    }
}

// Llamar a una funcion cargar preferencias cuando se carga la pagina, toda la venta del navegador, esto es con el window.onload
window.onload = cargar_preferencias;