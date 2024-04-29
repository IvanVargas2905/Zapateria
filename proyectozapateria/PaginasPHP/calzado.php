<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calzado</title>
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
<h2>Calzado de pies contentos</h2>
    <hr>
    <p></p>
    <!-- <ul>
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
    </ul> -->
    <p>
        Aqui se muestra algunos de los calzados que se venden en la tienda
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
    $resultado = mysqli_query($conexion, $consulta);
    //construir tabla html
    echo "<table> 
    <tr>
                <th>idcalzado</th>
                <th>nombrecalzado</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>id categoria</th>
    </tr>";
    //recuperar los registros del personal y generar un reglon de html para cada uno
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
 <td>" . $fila['Idcalzado'] . "</td>
 <td>" . $fila['nombrecalzado'] . "</td> 
 <td>" . $fila['descripcion'] . " </td>
 <td>" . $fila['precio'] . "</td> 
 <td>" . $fila['idcategoria'] . "</td> 
    <td>" .
    "</tr>";
    }
    ?>
</body>
</html>