67_fechas.html
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
Ingrese la fecha de nacimiento (dd/mm/aaaa):
<input type="text" name="dia" size="2">
<input type="text" name="mes" size="2">
<input type="text" name="anio" size="4">
<br>
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
67_fecha1.php
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
$fechanacimiento=$_REQUEST['anio']."-".$_REQUEST['mes']."-".$_REQUEST['dia'];
mysql_query("insert into alumnos(nombre,mail,codigocurso,fechanac) values
('$_REQUEST[nombre]','$_REQUEST[mail]',
$_REQUEST[codigocurso],'$fechanacimiento')", $conexion) or
die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "El alumno fue dado de alta.";
?>
<br>
<a href="pagina3.php">ver listado de alumnos</a>
</body>
</html>
67_fecha2.php
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
$registros=mysql_query("select alu.codigo as codigo,nombre,mail,
codigocurso,fechanac,nombrecur from alumnos as alu 
inner join cursos as cur on cur.codigo=alu.codigocurso",
$conexion) or 
die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
echo "Codigo:".$reg['codigo']."<br>"; 
echo "Nombre:".$reg['nombre']."<br>"; 
echo "Mail:".$reg['mail']."<br>";
echo "Fecha de Nacimiento:".$reg['fechanac']."<br>";
echo "Curso:".$reg['nombrecur']."<br>";
echo "<hr>";
}
mysql_close($conexion);
?>
</body>
</html>