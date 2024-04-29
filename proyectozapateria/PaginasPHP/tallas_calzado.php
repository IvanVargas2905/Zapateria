<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_genereales">
    <style>
        table{
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td{
            border: 3px dotted #666;
            padding: 10px;
            text-align: center;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>
    <title>Tallas de calzado</title>
</head>
<body>
    <h2>Tallas de calzado</h2>
    <hr> <!-- Corrección aquí -->
    <p>Tallas de calzado y equivalencia entre México y EE. UU.</p>
    <table>
        <th>Talla México</th>
        <th>Talla EU mujeres</th>
        <th>Talla EU hombres</th>
    <?php
    // El $ es para indicar una variable, en PHP
    $talla_mujer_eu = 3;
    $talla_hombre_eu = 2.5;

    for($i = 20; $i <= 30; $i += 0.5){ // Corrección aquí
        // Aquí se genera una fila
        echo "<tr>";
        // Aquí se genera una columna
        echo "<td>$i</td>";
        echo "<td>".($i + $talla_mujer_eu)."</td>"; // Corrección aquí
        echo "<td>".($i + $talla_hombre_eu)."</td>"; // Corrección aquí
        echo "</tr>";
        $talla_mujer_eu += 0.5;
        $talla_hombre_eu += 0.5;
    }
    ?>
    </table>
    <p><a href="../inicio2.html">Inicio</a></p>
</body>
</html>
