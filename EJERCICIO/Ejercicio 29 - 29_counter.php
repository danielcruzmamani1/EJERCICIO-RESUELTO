<!DOCTYPE html>
<html>
<head>
    <title>Contador Sencillo</title>
</head>
<body>
    <h1>Contador Sencillo</h1>
    <p>Cantidad de visitas:
        <b>
            <?php
            $file = "counter.txt"; // Nombre del archivo para el contador

            // Verificar si el archivo existe, si no, crearlo con un contador inicial de 0
            if (!file_exists($file)) {
                $fp = fopen($file, "w");
                fwrite($fp, "0");
                fclose($fp);
            }

            // Abrir el archivo para lectura y escritura
            $fp = fopen($file, "r+");
            if ($fp) {
                // Leer el valor actual del contador
                $counter = intval(fgets($fp, 7));
                echo $counter;
                // Incrementar el contador y escribir el nuevo valor en el archivo
                $counter++;
                rewind($fp);
                fputs($fp, $counter);
                fclose($fp);
            } else {
                echo "Error al abrir el archivo.";
            }
            ?>
        </b>
    </p>
</body>
</html>
