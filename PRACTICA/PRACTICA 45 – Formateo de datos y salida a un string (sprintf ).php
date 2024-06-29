<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Caracteres ASCII</title>
</head>
<body>
    <h2>Tabla de Caracteres ASCII</h2>
    <table border="1">
        <tr>
            <th>Decimal</th>
            <th>Carácter</th>
        </tr>
        <?php
        // Función para obtener el carácter ASCII
        function obtenerCaracter($numero) {
            return chr($numero);
        }

        // Imprimir la tabla de caracteres ASCII
        for ($i = 0; $i <= 127; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . obtenerCaracter($i) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
