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

// Consulta SQL para obtener todos los cursos
$sql = "SELECT codigo, nombrecur FROM cursos";
$result = $conn->query($sql);

// Mostrar los nombres de los cursos como hipervínculos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $codigo_curso = $row['codigo'];
        $nombre_curso = $row['nombrecur'];
        echo "<a href='mostrar_alumnos.php?codigo_curso=$codigo_curso'>$nombre_curso</a><br>";
    }
} else {
    echo "No se encontraron cursos.";
}

// Cerrar conexión
$conn->close();
?>
