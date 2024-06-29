<?php
// Definir el ancho y alto de la imagen
$ancho = 200;
$alto = 50;

// Crear una nueva imagen con fondo blanco
$imagen = imagecreatetruecolor($ancho, $alto);
$colorFondo = imagecolorallocate($imagen, 255, 255, 255);
imagefill($imagen, 0, 0, $colorFondo);

// Definir los colores para el borde y el texto del botón
$colorBorde = imagecolorallocate($imagen, 0, 0, 0);
$colorTexto = imagecolorallocate($imagen, 0, 0, 0);

// Definir el texto del botón
$textoBoton = "Click aquí";

// Calcular la posición para centrar el texto en el botón
$dimensionesTexto = imagettfbbox(12, 0, "arial.ttf", $textoBoton);
$textoAncho = $dimensionesTexto[2] - $dimensionesTexto[0];
$textoAlto = $dimensionesTexto[1] - $dimensionesTexto[7];
$xTexto = ($ancho - $textoAncho) / 2;
$yTexto = ($alto - $textoAlto) / 2 + $textoAlto;

// Dibujar el rectángulo del botón
imagefilledrectangle($imagen, 0, 0, $ancho - 1, $alto - 1, $colorBorde);

// Agregar el texto al botón
imagettftext($imagen, 12, 0, $xTexto, $yTexto, $colorTexto, "arial.ttf", $textoBoton);

// Establecer el tipo de contenido de la imagen
header("Content-type: image/png");

// Mostrar la imagen
imagepng($imagen);

// Liberar memoria
imagedestroy($imagen);
?>
