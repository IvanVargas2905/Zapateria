<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar personal</title>
    <link rel="stylesheet" href="../css/estilos_generales.css">

</head>
<body>
    <h2>AGREGAR PERSONAL</h2>
    <hr>

    <p>Se reciben los dato del personal y se guarda en la BD</p>
    <?php
    //RECUPERAR DATOS DEL FORMULARIO
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $salario = $_POST['salario'];
    $IdDepto = $_POST['IdDepto'];
    $foto = $_POST['foto'];

     //mostrar el nombre
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Puesto: $puesto</p>";
    echo "<p>Salario: $salario</p>";
    echo "<p>departamento: $IdDepto</p>";
    echo "<p>foto: $foto </p>";
   
   //conexion a la BASE DE DATOS 
      
    
   include("../codigobackend/conexion.php");
    //generar sentencia insert
    $sentencia= "INSERT INTO personal( nombre, 
    puesto, salario, IdDepto, foto)
    VALUES ('$nombre','$puesto','$salario','$IdDepto','$foto')";
    echo "<p></p>";
    echo"sentencia : $sentencia";



    //ejecutar sentencia y validar resultado
    if(!mysqli_query($conexion, $sentencia)){
        echo "<p>Error de operacion</p>";
    }else{
        echo "<p>Operacion exitosa</p>";
        echo "<p>Se guardo el registro: $nombre</p>";
    }
    //cerrar conexion de la base de datos
    mysqli_close($conexion);
    ?>

</body>
</html>