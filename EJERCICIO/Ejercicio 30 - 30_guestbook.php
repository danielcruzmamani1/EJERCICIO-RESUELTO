<!DOCTYPE html>
<html>
<head>
    <title>Un libro de visitas muy sencillo</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
    <h1>Libro de visitas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Tu comentario:<br>
        <textarea cols="55" rows="4" name="comment"></textarea><br> 
        Tu nombre:<br>
        <input type="text" name="name"><br> 
        Tu e-mail:<br>
        <input type="text" name="email"><br>
        <input type="submit" value="Publicar">
    </form>
    <h3>Mostrar todos los comentarios</h3>
    <?php
    // Guardar el nombre del archivo en la variable
    $file ="guestbook.txt";
    // Si se ha enviado el formulario y los campos requeridos no están vacíos
    if (isset($_POST['comment']) && !empty($_POST['name']) && !empty($_POST['email'])) {
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        // El archivo se abre para escritura-lectura
        $fp = fopen($file, "a");
        // Se incluye la fecha y se le da formato
        $dateOfEntry = date ("Y-n-j");
        // Se crea el enlace de e-mail
        $email = "<a href=\"mailto:$email\">$email</a>";
        // Ocultar caracteres html, eliminar slashes, mantener saltos de línea
        $comment = htmlspecialchars($comment);
        $comment = stripslashes($comment);
        // Montar la entrada del libro de visitas
        $entry = "<p><b>$name</b> ($email) wrote on <i>$dateOfEntry</i>:<br>$comment</p>\n";
        // Escribir la entrada en el archivo
        fwrite($fp, "$entry\n");
        // Cerrar el archivo
        fclose($fp);
    }
    // Mostrar el contenido del archivo
    readfile($file);
    ?>
</body>
</html>
