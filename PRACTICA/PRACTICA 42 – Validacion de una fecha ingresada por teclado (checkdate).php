<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Fecha</title>
</head>
<body>
    <h2>Ingresar Fecha</h2>
    <form action="pagina2.php" method="post">
        <label for="dia">Día:</label>
        <select id="dia" name="dia">
            <?php
            // Generar opciones para los días del 1 al 31
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <label for="mes">Mes:</label>
        <select id="mes" name="mes">
            <?php
            // Generar opciones para los meses del 1 al 12
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <label for="año">Año:</label>
        <select id="año" name="año">
            <?php
            // Generar opciones para los años del 2020 al 2030
            for ($i = 2020; $i <= 2030; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Verificar Fecha">
    </form>
</body>
</html>
