<!DOCTYPE html>
<html>
<head>
    <title>Formulario de carga</title>
</head>
<body>
    <h1>Formulario de carga</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    // Verificar si la persona es mayor de edad
    if ($edad >= 18) {
        echo "<p>$nombre es mayor de edad.</p>";
    } else {
        echo "<p>$nombre es menor de edad.</p>";
    }
    ?>
</body>
</html>
