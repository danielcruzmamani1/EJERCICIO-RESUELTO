<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "PHPFACIL";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para seleccionar todos los datos de la tabla "cursos"
$sql = "SELECT * FROM cursos";

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "Código: " . $row["codigo"] . " - Nombre del Curso: " . $row["nombrecur"] . "<br>";
    }
} else {
    echo "No se encontraron cursos.";
}

// Cerrar conexión
$conn->close();
?>
