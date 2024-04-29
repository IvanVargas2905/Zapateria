<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilos_generales">
    <title>ciclo for con PHP</title>
    <style>
        p{
            background-color: #f2f2f2;
            border: 1px solid #666;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Ciclo for con PHP</h2>
    </hr>
    <p>Se crea contenido de la pagina con codigo PHP</p>
    <!-- Aqui inicia un codigo PHP -->
    <?php
    // El $ es para indicar una variable, en php
    for($i = 0; $i <10000; $i++){
        echo "<p>$i</p>";
    }
    ?>
</body>
</html>