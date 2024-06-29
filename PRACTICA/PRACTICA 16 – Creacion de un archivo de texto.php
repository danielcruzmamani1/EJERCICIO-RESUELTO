<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Pizzas</title>
</head>
<body>
    <h1>Pedido de Pizzas</h1>
    <form action="procesar_pedido.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <label>Tipo de pizzas:</label><br>
        <input type="checkbox" id="jamon_queso" name="pizzas[]" value="Jamon y Queso">
        <label for="jamon_queso">Jamon y Queso</label><br>
        
        <input type="checkbox" id="napolitana" name="pizzas[]" value="Napolitana">
        <label for="napolitana">Napolitana</label><br>
        
        <input type="checkbox" id="mozzarella" name="pizzas[]" value="Mozzarella">
        <label for="mozzarella">Mozzarella</label><br><br>
        
        <label for="cantidad_jamon_queso">Cantidad (Jamon y Queso):</label>
        <input type="number" id="cantidad_jamon_queso" name="cantidad_jamon_queso" min="1" required><br>
        
        <label for="cantidad_napolitana">Cantidad (Napolitana):</label>
        <input type="number" id="cantidad_napolitana" name="cantidad_napolitana" min="1" required><br>
        
        <label for="cantidad_mozzarella">Cantidad (Mozzarella):</label>
        <input type="number" id="cantidad_mozzarella" name="cantidad_mozzarella" min="1" required><br><br>
        
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>
