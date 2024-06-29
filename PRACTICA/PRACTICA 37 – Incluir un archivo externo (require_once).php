<?php
function retornarConexion() {
    // Establecer la conexión a la base de datos
    $conexion = mysql_connect("localhost", "usuario", "contraseña");

    // Seleccionar la base de datos
    mysql_select_db("nombre_base_de_datos", $conexion);

    // Retornar la conexión
    return $conexion;
}
?>
