<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "PHPFACIL"; // Nombre de tu base de datos

// Obtener el nombre del curso a borrar enviado por el formulario
$nombreCurso = $_POST['nombre_curso'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para borrar el curso
$sql = "DELETE FROM cursos WHERE nombrecur = '$nombreCurso'";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Verificar si se borró algún registro
    if ($conn->affected_rows > 0) {
        echo "Se ha borrado el curso correctamente.";
    } else {
        echo "No existe el curso en la base de datos.";
    }
} else {
    echo "Error al borrar el curso: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
