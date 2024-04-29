// codigo para validar formulario, en particular que las contrasenas sean igual. si las contrasenas no son iguales, se muestra un mensaje de error
//
function validarcontrasena(){
    var contrasena = document.getElementById("contrasena").value;
    var contrasena2 = document.getElementById("contrasena2").value;
    if (contrasena != contrasena2){
        alert("Las contraseñas no son iguales");
        var contrasena = document.getElementById("contrasena");
        var contrasena2 = document.getElementById("contrasena2");
        contrasena.style.backgroundColor = "magenta";
        contrasena2.style.backgroundColor = "magenta";
        return false;
    } else {
        alert("Las contraseñas son iguales");
        // aqui ira un value, pero no queremos acceder a la informacion del usuario
        var contrasena = document.getElementById("contrasena");
        var contrasena2 = document.getElementById("contrasena2");
        // Si son iguales se pondran de color verde
        contrasena.style.backgroundColor = "green";
        contrasena2.style.backgroundColor = "green";
        return true;
    }
}