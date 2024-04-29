<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Personal</title>
    <link rel="stylesheet" href="../css/estilos_generales.css">
</head>
<body>
    <h2>Eliminar personal</h2>
</hr>
<p>Pagina que elimina un registro de personal</p>
<?php
//Recuperar datos del personal
$idpersonal = $_GET['IdPersonal'];
    $nombre = $_GET["nombre"];
    //hacer la conexion a la base de datos
    include("../codigobackend/conexion.php");
    //crear la consulta
    $consulta = "DELETE FROM personal WHERE IdPersonal = '$idpersonal'";
    echo "<p> $consulta </P>";
    //ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // el msqli_affected_rows nos regresa el numero de registros afectados
    $contador = mysqli_affected_rows($conexion);
    if ($contador == 1 and $resultado == true){
        echo "<P>El personal $nombre ha sido eliminado</P>";   
    }
    else{
        echo "<P>El personal $nombre no ha sido eliminado</P>";
    }
    //cerrar la conexion
    mysqli_close($conexion);
?>
</body>
</html>