<?php
include("../sesiones/conexion.php");
session_start(); 
$titulo = $_POST["titulo"];

$consulta = "SELECT id FROM noticias ORDER by id DESC LIMIT 1";
$consulta = mysqli_query($conexion,$consulta);
$consulta = mysqli_fetch_array($consulta);

$id = $consulta['id']; 

++$id; 

$ubiNews = "../archivos_txt/$titulo.txt";
$archivo   = $_FILES['archivo']['tmp_name'];

if(move_uploaded_file($archivo, $ubiNews)){

    echo "el archivo ha sido subido";


$consulta = "INSERT INTO noticias VALUES('$id', '$titulo', '$ubiNews')";

if(mysqli_query($conexion,$consulta)){
    echo "tu noticia ha sido guardada";

    header('location: menuNoticias.php');
    }
    else {
        echo "ERROR: " . $consulta . "<br>" . mysqli_error($conexion);
        echo "<a href= '../index.php'> Volver. </a></div>";
    }
    
}else{
    echo "ha ocurrido un error, trate de nuevo";
    echo "<a href= '../index.php'' > Volver. </a></div>"; 
}


?>












