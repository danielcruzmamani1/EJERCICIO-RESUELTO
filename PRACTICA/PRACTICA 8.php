<!DOCTYPE html>
<html>
<head>
    <title>Uso de variables en PHP</title>
</head>
<body>
    <h1>Uso de variables en PHP</h1>

    <?php
    // Definir tres variables enteras
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;

    // Definir un string que incorpore las variables y las sustituya en tiempo de ejecución
    $mensaje = "Los números son: $num1, $num2 y $num3.";

    // Imprimir el string con las variables sustituidas
    echo "<p>$mensaje</p>";
    ?>
</body>
</html>
