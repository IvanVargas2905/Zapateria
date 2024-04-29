<?php
session_start();
if (!isset($_SESSION['nombre_usuario'])) {
    header("location:../Sesiones/validar_sesion.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal</title>
    <link rel="stylesheet" href="../css/estilos_generales.css">
</head>
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
<body>
    <h2>personal de pies contentos</h2>
    <hr>
    <p></p>
    <ul>
        <li>
        <a href="buscar_personal.php">BUSQUEDA</a>
        </li>
        <li>
        <a href="agregar_personal.html">AGREGAR</a>
        </li>
        <li>
        <a href="eliminar_modificar_eliminar.php">Eliminar</a>
        </li>
        <li>
            <a href="eliminar_modificar_eliminar.php">Modificar</a>
        </li>
    </ul>
    <p>
        Se muestra el personal de la empresa 
        mediante programación php y base de datos
    </p>

    <?php
    //conexion con la base de datos 
    $conexion = mysqli_connect(
        "localhost",
        "root"
        ,
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
                <th>id Personal</th>
                <th>nombre</th>
                <th>puesto</th>
                <th>salario</th>
                <th>idDepto</th>
                <th>foto nombre</th>
    </tr>";
    //recuperar los registros del personal y generar un reglon de html para cada uno 
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
 <td>" . $fila['IdPersonal'] . "</td>
 <td>" . $fila['nombre'] . "</td> 
 <td>" . $fila['puesto'] . " </td>
 <td>" . $fila['salario'] . "</td> 
 <td>" . $fila['IdDepto'] . "</td> 
    <td>" .
 "<img src='../Imagen/" . $fila['foto'] . "' width='100' height='100'>".
$fila['foto'] . "</td>  
    </tr>";
    }
    ?>
    <p><a href="../inicio2.html">Inicio</a></p>
</body>
    
</html>