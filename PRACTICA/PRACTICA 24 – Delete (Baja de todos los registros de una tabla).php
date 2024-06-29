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

// Consulta SQL para borrar todos los registros de la tabla "cursos"
$sql = "DELETE FROM cursos";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Se han borrado todos los registros de la tabla 'cursos' correctamente.";
} else {
    echo "Error al borrar los registros: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
