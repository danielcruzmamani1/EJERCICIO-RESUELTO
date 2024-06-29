<!DOCTYPE html>
<html>
<head>
    <title>Modificar Alumno</title>
</head>
<body>
    <h1>Modificar Alumno</h1>
    <form action="modificar_alumno.php" method="post">
        <label for="codigo">Código de Alumno:</label><br>
        <input type="text" id="codigo" name="codigo" required><br><br>
        <label for="nombre">Nuevo Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="mail">Nuevo Correo Electrónico:</label><br>
        <input type="text" id="mail" name="mail" required><br><br>
        <label for="curso">Nuevo Curso:</label><br>
        <input type="text" id="curso" name="curso" required><br><br>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>
