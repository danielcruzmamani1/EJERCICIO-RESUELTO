<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Archivos</title>
</head>
<body>
    <h2>Upload de Archivos</h2>
    <form action="procesar_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivos[]" multiple><br>
        <input type="submit" value="Subir Archivos">
    </form>
</body>
</html>
