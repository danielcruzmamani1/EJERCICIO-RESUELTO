<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Donación</title>
</head>
<body>
    <h2>Formulario de Donación</h2>
    <form action="pagina2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="importe">Importe a Donar:</label>
        <input type="number" id="importe" name="importe" required><br><br>

        <input type="submit" value="Donar">
    </form>
</body>
</html>
