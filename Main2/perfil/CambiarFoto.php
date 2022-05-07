<?php
session_start(); 
$usuario = $_SESSION["usuario"];

$ubicacion = "../img/" . $usuario . "/Perfil.jpg";

$archivo = $_FILES['archivo']['tmp_name'];

if(move_uploaded_file($archivo, $ubicacion)) {

    echo "el archivo ha sido subido";

        header('location: perfil.php');
}

else{
    echo "ha ocurrido un error, trate de nuevo";
    echo "<a href='perfil.php'> voler. </a></div>";
}
?>