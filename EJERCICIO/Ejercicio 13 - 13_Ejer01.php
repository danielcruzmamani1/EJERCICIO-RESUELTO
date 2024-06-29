<?php
// Declaración de variables
$a = 8;
$b = 3;
$c = 3;

// Operaciones lógicas y salida de resultados
echo "1. ¿\$a es igual a \$b y \$c es mayor que \$b? ";
$resultado1 = ($a == $b) && ($c > $b);
echo $resultado1 ? "Verdadero" : "Falso";
echo "<br>";

echo "2. ¿\$a es igual a \$b o \$b es igual a \$c? ";
$resultado2 = ($a == $b) || ($b == $c);
echo $resultado2 ? "Verdadero" : "Falso";
echo "<br>";

echo "3. ¿\$b es menor o igual que \$c? ";
$resultado3 = !($b <= $c);
echo $resultado3 ? "Verdadero" : "Falso";
?>
