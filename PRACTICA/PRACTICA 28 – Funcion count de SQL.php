<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "PHPFACIL"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener todos los nombres de los cursos
$sql = "SELECT nombrecur FROM cursos";
$result = $conn->query($sql);

// Verificar si se encontraron cursos
if ($result->num_rows > 0) {
    // Mostrar los nombres de los cursos
    echo "<h2>Nombres de Cursos:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo $row['nombrecur'] . "<br>";
    }
    // Mostrar la cantidad total de cursos
    echo "<br><strong>Cantidad total de Cursos:</strong> " . $result->num_rows;
} else {
    echo "No se encontraron cursos.";
}

// Cerrar conexión
$conn->close();
?>
