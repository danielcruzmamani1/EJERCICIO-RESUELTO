58_alumnos16.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post"> 
Ingrese su mail:
<input type="text" name="mailusuario"
value="<?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail'];?>">
<br>
<input type="radio" name="opcion" value="recordar"> 
Recordar en esta computadora el mail ingresado.
<br>
<input type="radio" name="opcion" value="norecordar">
No recordar.
<br>
<input type="submit" value="confirmar">
</form>
</body>
</html>
<?php
if ($_REQUEST['opcion']=="recordar")
pagina2.php
setcookie("mail",$_REQUEST['mailusuario'],time()+(60*60*24*365),"/");
elseif ($_REQUEST['opcion']=="norecordar")
setcookie("mail","",time()-1000,"/");
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if ($_REQUEST['opcion']=="recordar")
echo "cookie creada";
elseif ($_REQUEST['opcion']=="norecordar")
echo "cookie eliminada";
?>
<br>
<a href="pagina1.php">Ir a la otra página</a>
</body>
</html>
