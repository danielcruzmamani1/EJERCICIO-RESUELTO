51_alumnos09.php
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
$registros=mysql_query("select count(*) as cantidad
from alumnos",$conexion) or 
die("Problemas en el select:".mysql_error());
$reg=mysql_fetch_array($registros);
echo "La cantidad de alumnos inscriptos son :".$reg['cantidad'];
?>
</body>
</html>
