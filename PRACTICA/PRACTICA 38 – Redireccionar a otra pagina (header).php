
<?php
if ($_REQUEST['direccion']<>"z80")
header("Location: pagina1.php");
?>
Otra cosa interesante que podemos hacer es pasar como parámetro en la segunda página un código de 
error:
<?php
if ($_REQUEST['direccion']<>"z80")
header("Location: pagina1.php?error=1");
?>
Y luego en la primera página mostrar un mensaje de error si es que la página recibe este parámetro:
<?php
if (isset($_REQUEST['error']))
echo "Ingreso clave incorrecta";
?>