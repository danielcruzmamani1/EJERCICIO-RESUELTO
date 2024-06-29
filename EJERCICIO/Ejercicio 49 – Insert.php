49_alumnos07.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post">
Ingrese nombre:
<input type="text" name="nombre"><br>
Ingrese mail:
<input type="text" name="mail"><br>
Seleccione el curso:
<select name="codigocurso">
<?php
$conexion=mysql_connect("localhost","root","z80") or 
die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or
die("Problemas en la selección de la base de datos");
$registros=mysql_query("select codigo,nombrecur from cursos",$conexion) or
die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
}
?>
</select>
<br>
<input type="submit" value="Registrar">
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
die("Problemas en la seleccion de la base de datos");
mysql_query("insert into alumnos(nombre,mail,codigocurso) values
('$_REQUEST[nombre]', '$_REQUEST[mail]',
$_REQUEST[codigocurso])", $conexion) or 
die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "El alumno fue dado de alta.";
?>
</body>
</html>