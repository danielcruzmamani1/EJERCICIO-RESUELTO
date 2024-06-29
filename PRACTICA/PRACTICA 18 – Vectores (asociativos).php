<?php
// Crear el vector asociativo con las claves de acceso de los usuarios
$usuarios = array(
    "usuario1" => "clave123",
    "usuario2" => "abc456",
    "usuario3" => "def789",
    "usuario4" => "ghi101",
    "usuario5" => "jkl202"
);

// Acceder e imprimir cada componente por su nombre
echo "Clave de acceso para usuario1: " . $usuarios["usuario1"] . "<br>";
echo "Clave de acceso para usuario2: " . $usuarios["usuario2"] . "<br>";
echo "Clave de acceso para usuario3: " . $usuarios["usuario3"] . "<br>";
echo "Clave de acceso para usuario4: " . $usuarios["usuario4"] . "<br>";
echo "Clave de acceso para usuario5: " . $usuarios["usuario5"] . "<br>";
?>
