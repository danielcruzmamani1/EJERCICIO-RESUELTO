<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periódico</title>
</head>
<body>
    <h1>Periódico</h1>
    <form action="configurar_titular.php" method="post">
        <input type="radio" name="titular" value="politica"> Noticia Política<br>
        <input type="radio" name="titular" value="economica"> Noticia Económica<br>
        <input type="radio" name="titular" value="deportiva"> Noticia Deportiva<br>
        <input type="submit" value="Configurar Titular">
    </form>
    <hr>
    <?php
    // Verificar si se ha configurado un titular y almacenarlo en una cookie
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["titular"])) {
        $titular = $_POST["titular"];
        setcookie("titular_elegido", $titular, time() + (86400 * 30), "/"); // Cookie válida por 30 días
    }

    // Verificar si existe la cookie de titular
    if (isset($_COOKIE["titular_elegido"])) {
        $titular_elegido = $_COOKIE["titular_elegido"];
        // Mostrar el titular correspondiente según la cookie
        switch ($titular_elegido) {
            case "politica":
                echo "<h2>Noticia Política: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>";
                break;
            case "economica":
                echo "<h2>Noticia Económica: Fusce vel ex justo. Nulla facilisi.</h2>";
                break;
            case "deportiva":
                echo "<h2>Noticia Deportiva: Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h2>";
                break;
            default:
                echo "<h2>Seleccione un titular.</h2>";
        }
    } else {
        // Si no existe la cookie, mostrar los tres titulares por defecto
        echo "<h2>Noticia Política: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>";
        echo "<h2>Noticia Económica: Fusce vel ex justo. Nulla facilisi.</h2>";
        echo "<h2>Noticia Deportiva: Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h2>";
    }
    ?>
</body>
</html>
