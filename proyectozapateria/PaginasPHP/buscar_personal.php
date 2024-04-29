<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Personal</title>
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
    <h2>Buscar personal</h2>
    <hr>
    <p>Buscar el personal por nombre o una parte del nombre</p>
    <form action="<?php ?>" method="post">
        <label for="nombre">nombre o apellido del personal</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="buscar">
    </form>
    <?php
    //VALIDAR ENVIO DE FORMULARIO
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Recibir formulario";
        echo "Validar envio de formulario";
        //RECIBIR DATOS DEL FORMULARIO
        $nombre = $_POST["nombre"];
        echo "Nombre: " . $nombre;
        
    //conexion con la base de datos
    //conexion con la base de datos 
    $conexion = mysqli_connect(
        "localhost",
        "root"
        ,
        "ivan",
        "zapateria"
    );
    //establecer la codificacion
    //establecer la codificacion

    //validar resultado de la coneccion
    if(mysqli_connect_errno()){
        echo "error de coneccion de la base de datos".mysqli_connect_errno();

    }
    // construir sentencia de consulta
    $consulta ="select * from personal where nombre like '%$nombre%'";
        echo"Consulta: " . $consulta;
    //ejecutar en la red
    $resultado = mysqli_query($conexion,$consulta);
    // construir tabla html
    echo"<table> 
            <tr>
                <th> id Personal </tn>
                <th> Nombre </tn>
                <th> Puesto </tn>
                <th> Salario </tn>
                <th> idDepto </tn>
                <th> Foto </tn>
            </tr>";
    //recuperar los registros del personal y generar un 
    //renglon en thml para cada uno

    while($fila = mysqli_fetch_assoc($resultado)){
        echo"<tr>
                <td>" . $fila['IdPersonal'] . "</td>
                <td>" . $fila['nombre'] . "</td>
                <td>" . $fila['puesto'] . "</td>
                <td>" . $fila['salario'] . "</td>
                <td>" . $fila['IdDepto'] . "</td>
                <td>" .
                "<img src='../Imagen/" . $fila['foto'] . "'width='100' height='100'>"    
                . "</td>
            </tr>";
    }

    echo "</table>";  
}
    ?>
    <p>
        <a href="personal.php"> volver a la pagina anterior</a>
    </p>
</body>
</html>