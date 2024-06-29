<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar del 2 - for</title>
</head>
<body>
    <h1>Tabla de multiplicar del 2 - for</h1>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $resultado = 2 * $i;
            echo "<tr><td>2 * $i</td><td>=</td><td>$resultado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar del 2 - while</title>
</head>
<body>
    <h1>Tabla de multiplicar del 2 - while</h1>
    <table border="1">
        <?php
        $i = 1;
        while ($i <= 10) {
            $resultado = 2 * $i;
            echo "<tr><td>2 * $i</td><td>=</td><td>$resultado</td></tr>";
            $i++;
        }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar del 2 - do-while</title>
</head>
<body>
    <h1>Tabla de multiplicar del 2 - do-while</h1>
    <table border="1">
        <?php
        $i = 1;
        do {
            $resultado = 2 * $i;
            echo "<tr><td>2 * $i</td><td>=</td><td>$resultado</td></tr>";
            $i++;
        } while ($i <= 10);
        ?>
    </table>
</body>
</html>
