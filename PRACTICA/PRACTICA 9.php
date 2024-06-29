<?php
// Generar un valor aleatorio entre 1 y 5
$numeroAleatorio = rand(1, 5);

// Convertir el número generado a su equivalente en castellano
switch ($numeroAleatorio) {
    case 1:
        $numeroEnCastellano = "uno";
        break;
    case 2:
        $numeroEnCastellano = "dos";
        break;
    case 3:
        $numeroEnCastellano = "tres";
        break;
    case 4:
        $numeroEnCastellano = "cuatro";
        break;
    case 5:
        $numeroEnCastellano = "cinco";
        break;
    default:
        $numeroEnCastellano = "número desconocido";
        break;
}

// Imprimir el número en castellano
echo "El número generado es: $numeroEnCastellano";
?>
