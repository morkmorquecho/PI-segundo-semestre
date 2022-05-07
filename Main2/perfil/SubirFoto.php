<?php
include("../sesiones/conexion.php");
session_start(); 
$usuario = $_SESSION["usuario"];

$consulta = "SELECT idFotos FROM proyectos ORDER by idFotos DESC LIMIT 1";
$consulta = mysqli_query($conexion,$consulta);
$consulta = mysqli_fetch_array($consulta);

$idFotos = $consulta['idFotos']; 

++$idFotos; 

$ubicacion = "../img/$usuario/idFoto$idFotos.jpg";
$archivo   = $_FILES['archivo']['tmp_name'];

if(move_uploaded_file($archivo, $ubicacion)){

    echo "el archivo ha sido subido";


$consulta = "INSERT INTO proyectos VALUES('$idFotos', '$usuario', '$ubicacion')";

if(mysqli_query($conexion,$consulta)){
    echo "tu imagen ha sido guardada";

    header('location: perfil.php');
    }
    else {
        echo "ERROR: " . $consulta . "<br>" . mysqli_error($conexion);
        echo "<a href= 'perfil.php'> Volver. </a></div>";
    }
    
}else{
    echo "ha ocurrido un error, trate de nuevo";
    echo "<a href= 'perfil.php'' > Volver. </a></div>"; 
}


?>