<!DOCTYPE html>
<html>
<head>
    <title>Tabla condicional 2</title>
</head>
<body>
    <h1>Tabla condicional 2</h1>
    <?php
    /* Crearemos una tabla de valores de seno y coseno de 0 a 2
    en incrementos de 0.01. Los valores negativos que resulten los queremos
    mostrar en rojo, y los valores positivos en azul */
    
    /* Variación. Un color diferente cada fila que se imprima */
    function muestra($valor, $renglon) {
        $fondo = ($renglon % 2) ? "#eeeeee" : "#dddddd";
        $color = ($valor < 0.5) ? "red" : "blue";
        echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
    }
    ?>
    <table border="1">
    <?php
    $nrenglon = 0;
    for ($x = 0; $x <= 2; $x += 0.01){
        echo "<tr>"; 
        muestra($x, $nrenglon); 
        muestra(sin($x), $nrenglon); 
        muestra(cos($x), $nrenglon); 
        echo "</tr>";
        $nrenglon++; // Incrementa el número de fila
    }
    ?>
    </table>
</body>
</html>
