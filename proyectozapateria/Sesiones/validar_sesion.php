<?php session_start();
?>
<!-- Esto es para marcar sesiones -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Sesion</title>
    <link rel="stylesheet" href="../css/estilos_generales.css">
</head>
<body>
    <h2>Validar sesion</h2>
    </hr>
    <p>Se revisa que el usuario se un miembro y 
    en caso afirmativo se crea una sesion para el</p>
    <?php
    //Recuperar datos del personal, el post extraemos los datos del formulario
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave_usuario = $_POST['clave_usuario'];
    ob_start();
    //hacer la conexion a la base de datos
    include("../codigobackend/conexion.php");
    //Codigo para proteger contra una inyesion de SQL
    // el stripslashes elimina los caracteres especiales
    $nombre_usuario = stripslashes($nombre_usuario);
    $clave_usuario = stripslashes($clave_usuario);

    //crear consulta de la base de datos
    $consulta = "SELECT * FROM miembros WHERE nombreMiembro = 
    '$nombre_usuario' AND claveMiembro = sha('$clave_usuario')";
    echo "<p> $consulta </p>";
    //ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // revisar resultado de la consulta, el num rows nos regresa el numero de registros
    $contador = mysqli_num_rows($resultado);

    if ($contador == 1 and $resultado){
        //crear la sesion
        $_SESSION['nombre_usuario'] = $nombre_usuario;
        // $_SESSION['clave_usuario'] = $clave_usuario;
        echo "<p>La sesion ha sido creada</p>";
        //redirigir a la pagina de personal
        header("location:../PaginasPHP/personal.php");

    }
    else{
        echo "<p>El usuario no es miembro</p>";
    }
    ?>
</body>
</html>