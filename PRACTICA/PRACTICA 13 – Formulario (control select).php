<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Impuestos</title>
</head>
<body>
    <h1>Formulario de Impuestos</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="ingresos">Ingresos anuales:</label>
        <select id="ingresos" name="ingresos" required>
            <option value="1-1000">1-1000</option>
            <option value="1001-3000">1001-3000</option>
            <option value=">3000">>3000</option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
