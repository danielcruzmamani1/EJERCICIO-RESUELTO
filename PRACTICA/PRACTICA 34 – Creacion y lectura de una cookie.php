<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida con Cookie</title>
</head>
<body>
    <?php
    // Verificar si se ha enviado el formulario para establecer la cookie
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
        // Obtener el nombre del formulario
        $nombre = $_POST["nombre"];

        // Establecer la cookie con el nombre del visitante
        setcookie("nombre_visitante", $nombre, time() + (86400 * 30), "/"); // Cookie válida por 30 días
    }

    // Verificar si existe la cookie
    if (isset($_COOKIE["nombre_visitante"])) {
        $nombre_visitante = $_COOKIE["nombre_visitante"];
        echo "<h2>Bienvenido, $nombre_visitante!</h2>";
    } else {
        // Mostrar el formulario para que el usuario ingrese su nombre
        echo "<h2>Ingresa tu nombre:</h2>";
        echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
        echo "<input type='text' name='nombre'>";
        echo "<input type='submit' value='Guardar'>";
        echo "</form>";
    }
    ?>
</body>
</html>
