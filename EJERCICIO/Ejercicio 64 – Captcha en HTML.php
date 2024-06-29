64_captcha2.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina3.php" method="post">
Dígitos verificadores:<img src="pagina2.php">
<br>
Ingrese valor:
<input type="text" name="numero">
<br>
<input type="submit" value="Verificar">
</form>
</body>
</html>
<?php
$ancho=100;
$alto=30;
$imagen=imageCreate($ancho,$alto);
pagina2.php
$amarillo=ImageColorAllocate($imagen,255,255,0); 
ImageFill($imagen,0,0,$amarillo);
$rojo=ImageColorAllocate($imagen,255,0,0);
$valoraleatorio=rand(100000,999999);
session_start();
$_SESSION['numeroaleatorio']=$valoraleatorio;
ImageString($imagen,5,25,5,$valoraleatorio,$rojo);
for($c=0;$c<=5;$c++)
{
$x1=rand(0,$ancho);
$y1=rand(0,$alto);
$x2=rand(0,$ancho);
$y2=rand(0,$alto);
ImageLine($imagen,$x1,$y1,$x2,$y2,$rojo);
}
Header ("Content-type: image/jpeg"); 
ImageJPEG ($imagen); 
ImageDestroy($imagen);
?>
<?php 
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
pagain3.php
if ($_SESSION['numeroaleatorio']==$_REQUEST['numero'])
echo "Ingresó el valor correcto";
else
echo "Incorrecto";
?>
</body>
</html>