<!DOCTYPE html>
<html>
<head>
    <title>Alta de Alumno</title>
</head>
<body>
    <h1>Alta de Alumno</h1>
    <form action="procesar_alta_alumno.php" method="post">
        <label for="nombre">Nombre del Alumno:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label>Seleccionar Curso:</label><br>
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "tu_usuario";
        $password = "tu_contraseña";
        $database = "PHPFACIL"; // Nombre de tu base de datos

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta SQL para obtener los cursos
        $sql = "SELECT * FROM cursos";
        $result = $conn->query($sql);

        // Mostrar los cursos como controles de radio
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<input type='radio' name='curso' value='" . $row['codigo'] . "'>" . $row['nombrecur'] . "<br>";
            }
        } else {
            echo "No hay cursos disponibles.";
        }

        // Cerrar conexión
        $conn->close();
        ?>

        <br><br>
        <input type="submit" value="Guardar Alumno">
    </form>
</body>
</html>
