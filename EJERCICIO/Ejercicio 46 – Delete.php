46_alumnos04.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post">
Ingrese el mail del alumno a borrar:
<input type="text" name="mail">
<br>
<input type="submit" value="buscar">
</form>
</body>
</html>
pagina2.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","root","z80") or 
die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or
die("Problemas en la selección de la base de datos");
$registros=mysql_query("select codigo from alumnos
where mail='$_REQUEST[mail]'",$conexion) or
die("Problemas en el select:".mysql_error());
if ($reg=mysql_fetch_array($registros))
{
mysql_query("delete from alumnos where mail='$_REQUEST[mail]'",$conexion) or 
die("Problemas en el select:".mysql_error());
echo "Se efectuó el borrado del alumno con dicho mail.";
}
else
{
echo "No existe un alumno con ese mail.";
}
mysql_close($conexion);
?>
</body>
</html>
