<?php
//conexion a la base de datos
$conexion = mysqli_connect("localhost","root","ivan","zapateria");
    //establecer la codificacion

    //validar resultado de la coneccion
    if(mysqli_connect_errno()){
        echo "error de coneccion de la base de datos".mysqli_connect_errno();

    }



?>