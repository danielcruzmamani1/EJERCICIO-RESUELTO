60_varsesion.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post"> 
Ingrese nombre de usuario:
<input type="text" name="campousuario"><br>
Ingrese clave:
<input type="password" name="campoclave"><br>
<input type="submit" value="confirmar">
</form>
</body>
</html>
<?php 
session_start();
pagina2.php
$_SESSION['usuario']=$_REQUEST['campousuario'];
$_SESSION['clave']=$_REQUEST['campoclave'];
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Se almacenaron dos variables de sesión.<br><br>
<a href="pagina3.php">Ir a la tercer página donde se recuperarán
las variables de sesión</a>
</body>
</html>
<?php 
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
pagina3.php
echo "Nombre de usuario recuperado de la variable de sesión:".$_SESSION['usuario'];
echo "<br><br>";
echo "La clave recuperada de la variable de sesión:".$_SESSION['clave'];
?>
</body>
</html>
