59_alumnos17.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if (isset($_COOKIE['usuario']))
echo "Cookie de sesión creada. Su valor es $_COOKIE[usuario]";
else
echo "No existe cookie de sesión";
?>
<br>
<a href="pagina2.php">Crear cookie de sesión</a>
</body>
</html>
<?php 
setcookie("usuario","diego",0);
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Cookie de sesión creada.<br>
pagina2.php
<a href="pagina1.php">Retornar a la página anterior.</a>
</body>
</html>