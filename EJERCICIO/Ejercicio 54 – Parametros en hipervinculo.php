54_alumnos12.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<A href="pagina2.php?tabla=2">Tabla del 2</A> <br>
<A href="pagina2.php?tabla=3">Tabla del 3</A> <br>
<A href="pagina2.php?tabla=5">Tabla del 5</A>
</body>
</html>
pagina2.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
echo "Listado de la tabla del $_REQUEST[tabla] <br>";
for($f=1;$f<=10;$f++)
{
$valor=$f*$_REQUEST['tabla'];
echo $valor."-";
}
?>
</body>
</html>
