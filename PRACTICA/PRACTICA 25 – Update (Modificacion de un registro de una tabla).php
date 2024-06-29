<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "PHPFACIL"; // Nombre de tu base de datos

// Obtener el código del curso y el nuevo nombre enviado por el formulario
$codigoCurso = $_POST['codigo_curso'];
$nuevoNombre = $_POST['nuevo_nombre_curso'];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para modificar el nombre del curso
$sql = "UPDATE cursos SET nombrecur = '$nuevoNombre' WHERE codigo = $codigoCurso";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Verificar si se modificó algún registro
    if ($conn->affected_rows > 0) {
        echo "Se ha modificado el nombre del curso correctamente.";
    } else {
        echo "No existe un curso con ese código.";
    }
} else {
    echo "Error al modificar el nombre del curso: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
