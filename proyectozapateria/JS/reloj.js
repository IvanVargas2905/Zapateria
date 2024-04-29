// codigo para mostrar un reloj con la hora local
function obtenerhora(){
    // obtener la hora y fecha
    let fechahora = Date();
    // acceder a; elemeto div para mostrar la hora
    let div_hora1 = document.getElementById("div_reloj");
    // mostrar la hora en el div
    div_hora1.innerHTML = "hora local: " + fechahora;
    // actualizar la hora cada segundo
    // aqui habra recursividad adentro de los parentesis se pone el nombre de la funcion, en el segundo argumento se pone el tiempo en milisegundos
    let repetir = setTimeout("obtenerhora()", 1000);
}