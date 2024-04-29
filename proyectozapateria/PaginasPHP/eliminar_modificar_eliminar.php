<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar y modificar perosnal</title>
    <link rel="stylesheet" href="../css/estilos_generales.css">
    <style>
    table, th, td {
        border: 2px solid blue;
        border-collapse: collapse;
    }
    ul, li {
        list-style-type: none;
        padding: 15px;
        background-color: #f2f2f2;
        margin: 10;
    }
</style>
</head>
<body>
    <h2>Modificar y elimar personal</h2>
    </hr>
<p>Se permite elimar registro de personal o modificar al personal existente</p>
<?php
//conexion a la BASE DE DATOS 
include("../codigobackend/conexion.php");
    //conexion con la base de datos 
    $conexion = mysqli_connect(
        "localhost",
        "root",
        "ivan",
        "zapateria"
    );
    //establecer la codificacion
    
    //validar resultado de la conexion 
    if (mysqli_connect_errno()) {
        echo "error a la conexion de la base de datos" . mysqli_connect_error();
    }
    //construir sentencia de consulta
    $consulta = "select * from personal";
    //ejecutar en la bd
    $resultado = mysqli_query($conexion, $consulta);
    //construir tabla html
    echo "<table> 
    <tr>
                <th>Id Personal</th>
                <th>nombre</th>
                <th>puesto</th>
                <th>salario</th>
                <th>IdDepto</th>
                <th>foto nombre</th>
                <th>eliminar</th>
                <th>modificar</th>
    </tr>";
    //recuperar los registros del personal y generar un reglon de html para cada uno 
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // este tr genera un reglon de la tabla html
        echo "<tr>
 <td>" . $fila['IdPersonal'] . "</td>
 <td>" . $fila['nombre'] . "</td> 
 <td>" . $fila['puesto'] . " </td>
 <td>" . $fila['salario'] . "</td> 
 <td>" . $fila['IdDepto'] . "</td> 
    <td>" .
 "<img src='../Imagen/" . $fila['foto'] . "' width='100' height='100'>".
$fila['foto'] . "</td>
<td>
<a href='confirmar_eliminar_personal.php?IdPersonal=" . $fila['IdPersonal'] . 
"&nombre=". 
$fila['nombre'] ."'>Eliminar</a> </td>" .
    "</tr>";
    }
    ?>
    <p></p>
    <p><a href="../inicio2.html">Inicio</a></p>
</body>
</html>