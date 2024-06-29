56_alumnos14.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina2.php" method="post" enctype="multipart/form-data"> 
Seleccione el archivo:
<input type="file" name="foto"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
pagina2.php
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
echo "La foto se registro en el servidor.<br>";
$nom=$_FILES['foto']['name'];
echo "<img src=\"$nom\">";
?>
</body>
</html>