<!DOCTYPE html>
<html>
<head>
    <title>Alta de Alumnos</title>
</head>
<body>
    <h2>Alta de Alumnos</h2>
    <form action="pagina2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="dia">Fecha de Nacimiento:</label><br>
        <select name="dia" id="dia">
            <?php
            // Generar opciones para los días del 1 al 31
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="mes" id="mes">
            <?php
            // Generar opciones para los meses del 1 al 12
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="año" id="año">
            <?php
            // Generar opciones para los años del 1900 al 2006
            for ($i = 1900; $i <= 2006; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
