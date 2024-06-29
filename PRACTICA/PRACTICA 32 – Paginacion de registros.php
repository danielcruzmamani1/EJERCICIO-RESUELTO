<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "PHPFACIL"; // Nombre de tu base de datos

// Establecer la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Número de registros por página
$registros_por_pagina = 3;

// Calcular el número total de registros en la tabla CURSOS
$sql_total_registros = "SELECT COUNT(*) AS total FROM cursos";
$result_total_registros = $conn->query($sql_total_registros);
$total_registros = $result_total_registros->fetch_assoc()['total'];

// Calcular el número total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Obtener el número de página actual
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el registro inicial para la consulta SQL
$registro_inicial = ($pagina_actual - 1) * $registros_por_pagina;

// Consulta SQL para obtener los registros de la página actual
$sql_registros_pagina = "SELECT * FROM cursos LIMIT $registro_inicial, $registros_por_pagina";
$result_registros_pagina = $conn->query($sql_registros_pagina);

// Mostrar los registros de la página actual
if ($result_registros_pagina->num_rows > 0) {
    while ($row = $result_registros_pagina->fetch_assoc()) {
        echo "Código: " . $row['codigo'] . " - Nombre: " . $row['nombrecur'] . "<br>";
    }
} else {
    echo "No se encontraron cursos.";
}

// Mostrar la paginación
echo "<br>Páginas: ";
for ($i = 1; $i <= $total_paginas; $i++) {
    echo "<a href='?pagina=$i'>$i</a> ";
}

// Cerrar la conexión
$conn->close();
?>
