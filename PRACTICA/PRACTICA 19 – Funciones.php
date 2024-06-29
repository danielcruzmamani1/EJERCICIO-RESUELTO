<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="procesar_datos.php" method="post">
        <label for="usuario">Nombre de usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="clave1">Clave:</label><br>
        <input type="password" id="clave1" name="clave1" required><br><br>
        
        <label for="clave2">Repetir Clave:</label><br>
        <input type="password" id="clave2" name="clave2" required><br><br>
        
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
