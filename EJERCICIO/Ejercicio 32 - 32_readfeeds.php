<!DOCTYPE html>
<html>
<head>
    <title>Lector de feeds</title>
</head>
<body>
    <h1>Últimos artículos</h1>
    <ul>
        <?php
        // Ruta al archivo XML de feed
        $feedFile = "feed.xml";

        // Intentar cargar el archivo XML y manejar errores si ocurren
        $feed = simplexml_load_file($feedFile);

        if ($feed === false) {
            echo "<p>Error al cargar el feed.</p>";
        } else {
            // Recorrer cada entrada del feed
            foreach ($feed->entry as $entry) {
                $title = $entry->title;
                $link = $entry->link;

                // Mostrar el título y enlace de la entrada
                echo "<li><a href='$link'>$title</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
