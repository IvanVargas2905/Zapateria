<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Definición de metadatos -->
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista en dispositivos móviles -->
    <title>Tarea de php</title> <!-- Título de la página -->
</head>
<style>
    /* Estilos CSS */
    /* Aquí se define un estilo para mostrar los errores en rojo */
    .error {color: #FF0000;}
</style>
<body>
<?php
// Define variables y las inicializa en valores vacíos
$nameErr = $emailErr = $genderErr = $websiteErr = ""; // Errores
$name = $email = $gender = $comment = $website = ""; // Datos del formulario

// Verifica si el método de envío es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validación del campo nombre
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Verifica si el nombre contiene solo letras y espacios en blanco
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  // Validación del campo email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Verifica si el formato del email es válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  // Validación del campo website
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // Verifica si la sintaxis de la URL es válida
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  // Validación del campo comentario
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  // Validación del campo género
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

// Función para limpiar los datos del formulario
function test_input($data) {
  $data = trim($data); // Elimina espacios en blanco al principio y al final
  $data = stripslashes($data); // Elimina barras invertidas de un string
  $data = htmlspecialchars($data); // Convierte caracteres especiales en entidades HTML
  return $data;
}
?>

<h2>Ultimo trabajo de php</h2> <!-- Título -->
<p><span class="error">* required field</span></p> <!-- Mensaje de error -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <!-- Formulario -->
  Name: <input type="text" name="name" value="<?php echo $name;?>"> <!-- Campo de nombre -->
  <span class="error">* <?php echo $nameErr;?></span> <!-- Mensaje de error -->
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>"> <!-- Campo de email -->
  <span class="error">* <?php echo $emailErr;?></span> <!-- Mensaje de error -->
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>"> <!-- Campo de website -->
  <span class="error"><?php echo $websiteErr;?></span> <!-- Mensaje de error -->
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea> <!-- Campo de comentario -->
  <br><br>
  Gender: <!-- Selección de género -->
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span> <!-- Mensaje de error -->
  <br><br>
  <input type="submit" name="submit" value="Submit>"> <!-- Botón de envío -->
</form>
</html>
</body>