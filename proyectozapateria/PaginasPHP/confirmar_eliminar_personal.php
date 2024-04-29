<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="../css/estilos_generales.css">
</head>
<body>
    <h2>Eliminar personal</h2>
    </hr>
    <p>Se pregunta al usuario para confirmar o cancelar la operacion de eliminar personal</p>
    <?php
    //Recuperar datos del personal
    // get recupera datos de la url, aqui se usa el get porque es de la rul
    // el post es porque no los podemos ver, pero los mandamos
    $idpersonal = $_GET['IdPersonal'];
    $nombre = $_GET["nombre"];
    echo "¿Esta seguro de eliminar al personal con ID = $idpersonal? y 
    nombre = $nombre";
    $parametro = 'eliminar_personal.php?IdPersonal=' .$idpersonal . '&nombre=' . $nombre;
    echo "<p></p>";
    echo $parametro;
    ?>
    <!--Aqui llamamos a abrir el php para poder llamar 
     a la variable parametro del anterior php  -->
    <input type="button" value="   si   " onClick =
    <?php echo "location.href='$parametro'"; 
    ?>
    >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value = "   no   " onClick = 
    "location.href='eliminar_modificar_eliminar.php'">
</body>
</html>