<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Deportes</title>
</head>
<body>
    <h1>Formulario de Deportes</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label>Deportes que practica:</label><br>
        <input type="checkbox" id="futbol" name="deportes[]" value="futbol">
        <label for="futbol">Fútbol</label><br>
        
        <input type="checkbox" id="basket" name="deportes[]" value="basket">
        <label for="basket">Básquet</label><br>
        
        <input type="checkbox" id="tennis" name="deportes[]" value="tennis">
        <label for="tennis">Tenis</label><br>
        
        <input type="checkbox" id="voley" name="deportes[]" value="voley">
        <label for="voley">Vóley</label><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
