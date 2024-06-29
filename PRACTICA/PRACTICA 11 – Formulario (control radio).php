<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Estudios</title>
</head>
<body>
    <h1>Formulario de Estudios</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label>Tipo de estudios:</label><br>
        <input type="radio" id="sin_estudios" name="estudios" value="no_tiene" required>
        <label for="sin_estudios">No tiene estudios</label><br>
        
        <input type="radio" id="primarios" name="estudios" value="primarios">
        <label for="primarios">Estudios primarios</label><br>
        
        <input type="radio" id="secundarios" name="estudios" value="secundarios">
        <label for="secundarios">Estudios secundarios</label><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
