61_incluirarchivo.php
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php require_once("pagina2.php"); 
cabeceraPagina("Titulo principal de la página");
echo "<br><br><center>Este es el cuerpo de la página<br><br></center>";
piePagina("Pie de la página");
?>
</body>
</html>
<?php
function cabeceraPagina($tit)
{
pagina2.php
echo "<table width=\"100%\"><tr><td bgcolor=\"#ffff00\" 
align=\"center\">$tit</td></tr></table>";
}
function piePagina($tit)
{
echo "<table width=\"50%\" align=\"center\"><tr><td 
bgcolor=\"#cccccc\">$tit</td></tr></table>";
}
?>