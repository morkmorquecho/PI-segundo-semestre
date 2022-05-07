<HTML>
<HEAD>
<TITLE></TITLE>
</HEAD>
<BODY>

<?php 

    $archivo = fopen("../archivos_txt/pokemon.txt", "r");
    while(!feof($archivo)) {
        $frase = fgets($archivo);
        echo "<p><em>$frase</em></p>";    
    }
    fclose($archivo);

?>
</BODY>
</HTML>