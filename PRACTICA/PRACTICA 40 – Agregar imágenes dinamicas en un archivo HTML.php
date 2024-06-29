<?php
// Recuperar el puntaje del parámetro puntos
$puntos = isset($_GET['puntos']) ? $_GET['puntos'] : 0;

// Definir el tamaño y el color del círculo
$radio = 10;
$colorCirculo = imagecolorallocate($imagen, 0, 0, 255); // Azul

// Crear una nueva imagen
$anchoImagen = $radio * 2 * $puntos + 10; // Ajustar el ancho según la cantidad de puntos
$altoImagen = $radio * 2 + 10;
$imagen = imagecreatetruecolor($anchoImagen, $altoImagen);

// Rellenar el fondo de blanco
$colorFondo = imagecolorallocate($imagen, 255, 255, 255);
imagefill($imagen, 0, 0, $colorFondo);

// Dibujar los círculos
for ($i = 0; $i < $puntos; $i++) {
    $centroX = $radio + ($radio * 2 * $i);
    $centroY = $radio + 5;
    imagefilledellipse($imagen, $centroX, $centroY, $radio * 2, $radio * 2, $colorCirculo);
}

// Establecer el tipo de contenido de la imagen
header("Content-type: image/png");

// Mostrar la imagen
imagepng($imagen);

// Liberar memoria
imagedestroy($imagen);
?>
