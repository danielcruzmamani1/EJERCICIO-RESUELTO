<!DOCTYPE html>
<html>
<head>
    <title>Modificación de Contrato</title>
</head>
<body>
    <h1>Modificación de Contrato</h1>
    <form action="procesar_contrato.php" method="post">
        <textarea name="contrato" rows="10" cols="50" readonly>
            En la ciudad de [...], se acuerda entre la Empresa [...]
            representada por el Sr. [...]
            en su carácter de Apoderado, con domicilio en la calle [...]
            y el Sr. [...], futuro empleado con domicilio en [...],
            celebrar el presente contrato a Plazo Fijo, de acuerdo a
            la normativa vigente de los artículos 90, 92, 93,
            94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </textarea><br><br>
        <label for="modificacion">Modificación:</label><br>
        <input type="text" id="modificacion" name="modificacion" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
