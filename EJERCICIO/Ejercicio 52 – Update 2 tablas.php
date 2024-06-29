52_alumnos10.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post"> 
Ingrese el mail del alumno:
<input type="text" name="mail"><br>
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
$registros=mysql_query("select * from alumnos
where mail='$_REQUEST[mail]'",$conexion) or
die("Problemas en el select:".mysql_error());
if ($regalu=mysql_fetch_array($registros))
{
?>
<form action="pagina3.php" method="post">
<input type="hidden" name="mailviejo" value="<?php 
echo $regalu['mail'] ?>">
<select name="codigocurso">
<?php
$registros=mysql_query("select * from cursos",$conexion) or
die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
if ($regalu['codigocurso']==$reg['codigo'])
echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecur]</option>";
else
echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
}
?>
</select>
<br>
<input type="submit" value="Modificar">
</form>
<?php
}
else
echo "No existe alumno con dicho mail";
?>
</body>
</html>
<head>
<title>Problema</title>
</head>
<body>
<?php
pagina3.php
$conexion=mysql_connect("localhost","root","z80") or 
die("Problemas en la conexion");
mysql_select_db("phpfacil",$conexion) or
die("Problemas en la selección de la base de datos");
$registros=mysql_query("update alumnos
set codigocurso=$_REQUEST[codigocurso]
where mail='$_REQUEST[mailviejo]'",$conexion) or 
die("Problemas en el select:".mysql_error());
echo "El curso fue modificado con exito";
?>
</body>
</html>
