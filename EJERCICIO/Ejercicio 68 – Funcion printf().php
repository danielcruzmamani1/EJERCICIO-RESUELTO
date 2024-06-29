68_printf1.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$entero=255;
printf("Valor entero en formato decimal %d <br>",$entero);
printf("Valor entero en formato hexadecimal con letras minúsculas
%x<br>", $entero);
printf("Valor entero en formato hexadecimal con letras mayúsculas
%X<br>", $entero);
printf("Valor entero en formato binario %b<br>", $entero);
printf("Valor entero en formato octal %o<br>", $entero);
$letra=65;
printf("Valor entero como caracter ascii %c<br>", $letra);
echo "<br>";
$real=10.776;
printf("Impresion de un valor de tipo double %f <br>",$real);
printf("Impresion de un valor de tipo double indicando la cantidad de decimales
a imprimir %0.2f <br>",$real);
?>
<br>
<A href="pagina2.php">Algunas utilidades de estas conversiones</A>
</body>
</html>
68_printf2.php
<html>
<head>
<title>Problema</title>
</head>
<body bgcolor="<?php printf("#%X%X%X",150,150,0); ?>">
En esta página definimos el color de fondo indicando la cantidad de rojo,verde 
y azul, en formato decimal y solicitando a la función printf que haga la 
conversión a hexadecimal. Recordemos que la propiedad bgcolor de la
marca body, lo requiere en hexadecimal.<br><br>
<a href="pagina3.php">último ejemplo</a>
</body>
</html>
68_printf3.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$dia=6;
$mes=5;
$anio=2006;
printf("%02d/%02d/%d",$dia,$mes,$anio);
?>
</body>
</html>
