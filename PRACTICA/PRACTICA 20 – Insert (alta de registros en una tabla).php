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

// Consulta SQL para crear la tabla "cursos"
$sql = "CREATE TABLE cursos (
codigo INT(11) NOT NULL AUTO_INCREMENT,
nombrecur VARCHAR(40) NOT NULL,
PRIMARY KEY (codigo)
)";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Tabla 'cursos' creada correctamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
