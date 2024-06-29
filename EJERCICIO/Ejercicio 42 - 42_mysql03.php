<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h3>Introducir direcciones</h3>
    <?php 
    include("acceso.inc.php");

    if (isset($_POST['submit'])) {
        if (empty($_POST['Nombre'])) {
            echo "<p>Introduzca el <b>nombre</b>.</p>";
        } else if (strlen($_POST['Apellido']) < 3) {
            echo "<p>El apellido debe tener como mínimo <b>3</b> caracteres.</p>";
        } else {
            $sql = "INSERT INTO direcciones(Tratamiento, Nombre, Apellido, Calle, CP, Localidad, Tel, Movil, 
            Mail, Website, Categoria, Notas) VALUES ('$_POST[Tratamiento]', '$_POST[Nombre]', '$_POST[Apellido]', 
            '$_POST[Calle]', '$_POST[CP]', '$_POST[Localidad]', '$_POST[Tel]', '$_POST[Movil]', '$_POST[Mail]', 
            '$_POST[Website]', '$_POST[Categoria]', '$_POST[Notas]')";
            
            $resultado = mysql_query($sql);

            if ($resultado) {
                echo "<p>Datos agregados con éxito.</p>";
            } else {
                echo "<p>Datos <b>no</b> agregados.</p>";
            }
        }
        echo "[ <a href='javascript:history.back()'>Volver</a> ] - [ <a href='$_SERVER[PHP_SELF]'> Introducir nueva fila</a>]";
    } else {
        $sql2 = "SELECT * FROM categorias";
        $resultado2 = mysql_query($sql2);
        $campocat = "";

        while ($row = mysql_fetch_assoc($resultado2)) {
            $campocat .= "<option value='$row[Categoria]'>$row[Categoria]</option>\n";
        }

        echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>";
        echo "<table>";
        echo "<tr><td>Tratamiento:</td><td><select name='Tratamiento'>";
        echo "<option>Sr.</option>";
        echo "<option>Sra.</option>";
        echo "</select></td></tr>";
        echo "<tr><td>Nombre:</td><td><input type='text' name='Nombre'></td></tr>";
        echo "<tr><td>Apellido:</td><td><input type='text' name='Apellido'></td></tr>";
        echo "<tr><td>Calle:</td><td><input type='text' name='Calle'></td></tr>";
        echo "<tr><td>CP:</td><td><input type='text' name='CP'></td></tr>";
        echo "<tr><td>Localidad:</td><td><input type='text' name='Localidad'></td></tr>";
        echo "<tr><td>Tel:</td><td><input type='text' name='Tel'></td></tr>";
        echo "<tr><td>Movil:</td><td><input type='text' name='Movil'></td></tr>";
        echo "<tr><td>E-mail:</td><td><input type='text' name='Mail'></td></tr>";
        echo "<tr><td>Website:</td><td><input type='text' name='Website'></td></tr>";
        echo "<tr><td>Categoria:</td><td><select name='Categoria'>$campocat</select></td></tr>";
        echo "<tr><td>Notas:</td><td><textarea cols='60' rows='4' name='Notas'></textarea></td></tr>";
        echo "<tr><td><input type='submit' value='Introducir datos' name='submit'></td></tr>";
        echo "</table>";
        echo "</form>";
    }
    mysql_close($dp);
    ?>
</body>
</html>
