<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD>
<BODY>


<?php
include("../sesiones/conexion.php");
            
$consulta = "SELECT * FROM noticias"; //selecciono tabla y usuario
$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_row($resultados)){
?>

<a href="ver<?php echo $fila[1]?>.php" class="enlace"><?php echo $fila[1]?></a> <br> <br>


<?php
}

?>
</BODY>
</HTML>





