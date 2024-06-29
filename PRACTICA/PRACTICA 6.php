<!DOCTYPE html>
<html>
<head>
    <title>Número Aleatorio</title>
</head>
<body>
    <h1>Número Aleatorio</h1>
    <?php
    // Generar un número aleatorio entre 1 y 100
    $num = rand(1, 100);

    // Mostrar el número generado
    echo "<p>El número aleatorio generado es: $num</p>";

    // Comprobar si el número es menor o igual a 50 o mayor
    if ($num <= 50) {
        echo "<p>El número generado es menor o igual a 50.</p>";
    } else {
        echo "<p>El número generado es mayor a 50.</p>";
    }
    ?>
</body>
</html>

