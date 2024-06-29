
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post"> 
Ingrese una fecha (dd/mm/aaaa):
<input type="text" name="dia" size="2">
<input type="text" name="mes" size="2">
<input type="text" name="anio" size="4">
<br>
<input type="submit" value="validar">
</form>
</body>
</html>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['anio']))
echo "La fecha ingresada es correcta";
else
echo "La fecha no es válida";
?>
</body>
</html>

<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if (is_numeric($_REQUEST['dia']) &&
is_numeric($_REQUEST['mes']) &&
is_numeric($_REQUEST['anio']))
{
if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['anio']))
echo "La fecha ingresada es correcta";
else
echo "La fecha no es válida";
}
else
echo "La fecha no es válida";
?>
</body>
</html>
