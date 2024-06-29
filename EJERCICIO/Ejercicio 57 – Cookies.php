57_alumnos15.php
<html>
<head>
<title>Problema</title>
</head>
<body
<?php if (isset($_COOKIE['color'])) echo " bgcolor=\"$_COOKIE[color]\""
?>
>
<form action="pagina2.php" method="post">
Seleccione de que color desea que sea la página de ahora en más:<br>
<input type="radio" value="rojo" name="radio">Rojo<br>
<input type="radio" value="verde" name="radio">Verde<br>
<input type="radio" value="azul" name="radio">Azul<br>
<input type="submit" value="Crear cookie">
</form>
</body>
</html>
<?php
if ($_REQUEST['radio']=="rojo")
pagina2.php
setcookie("color","#ff0000",time()+60*60*24*365,"/");
elseif ($_REQUEST['radio']=="verde")
setcookie("color","#00ff00",time()+60*60*24*365,"/");
elseif ($_REQUEST['radio']=="azul")
setcookie("color","#0000ff",time()+60*60*24*365,"/");
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Se creó la cookie.
<br>
<a href="pagina1.php">Ir a la otra página</a>
</body>
</html>
