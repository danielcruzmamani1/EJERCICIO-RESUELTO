<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Pizzas</title>
</head>
<body>
    <h1>Archivo de Pedido de Pizzas</h1>
    <pre>
        <?php
        // Leer el contenido del archivo de pedido de pizzas
        $archivo = "datos.txt";
        if (file_exists($archivo)) {
            $contenido = file_get_contents($archivo);
            echo $contenido;
        } else {
            echo "El archivo de pedido de pizzas no existe.";
        }
        ?>
    </pre>
</body>
</html>
