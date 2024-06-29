<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Quejas</title>
</head>
<body>
    <h2>Registrar una queja</h2>
    <form action="pagina2.php" method="post">
        <label for="nombre">Nombre del visitante:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="descripcion">Descripción de la queja:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Enviar Queja">
    </form>
    <br>
    <a href="pagina3.php">Ver quejas registradas</a>
</body>
</html>
