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
$sql_cursos = "SELECT codigo, nombrecur FROM cursos";
$result_cursos = $conn->query($sql_cursos);

// Verificar si se encontraron cursos
if ($result_cursos->num_rows > 0) {
    // Recorrer los resultados de la consulta de cursos
    while ($row_curso = $result_cursos->fetch_assoc()) {
        $codigo_curso = $row_curso['codigo'];
        $nombre_curso = $row_curso['nombrecur'];
        
        // Consulta SQL para obtener la cantidad de inscriptos al curso
        $sql_cantidad_inscriptos = "SELECT COUNT(*) AS cantidad FROM alumnos WHERE codigo_curso = $codigo_curso";
        $result_cantidad_inscriptos = $conn->query($sql_cantidad_inscriptos);
        $row_cantidad_inscriptos = $result_cantidad_inscriptos->fetch_assoc();
        $cantidad_inscriptos = $row_cantidad_inscriptos['cantidad'];
        
        // Consulta SQL para obtener los nombres de los inscriptos al curso
        $sql_nombres_inscriptos = "SELECT nombre FROM alumnos WHERE codigo_curso = $codigo_curso";
        $result_nombres_inscriptos = $conn->query($sql_nombres_inscriptos);
        
        // Mostrar los datos del curso y sus inscriptos
        echo "Nombre del curso: $nombre_curso <br>";
        echo "Cantidad de inscripciones: $cantidad_inscriptos <br>";
        echo "Nombres: ";
        while ($row_nombre_inscripto = $result_nombres_inscriptos->fetch_assoc()) {
            echo $row_nombre_inscripto['nombre'] . " ";
        }
        echo "<br><br>";
    }
} else {
    echo "No se encontraron cursos.";
}

// Cerrar conexión
$conn->close();
?>
