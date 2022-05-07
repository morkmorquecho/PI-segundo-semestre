<?php
include("conexion.php");

$titulo =$_POST["usuario"];
$articulo =$_POST["password"];



//evualuar si el usuario ya existe
$consultaId = "SELECT usuario
            FROM cuentas
            WHERE usuario= '$usuario' ";
$consultaId = mysqli_query($conexion, $consultaId); 
$consultaId = mysqli_fetch_array($consultaId); 

//si no existe el usuario es aceptado y se introducen los datos 
if(!$consultaId){

    $sql = "INSERT INTO cuentas VALUES ('$usuario', '$password', '$email', '$edad', '$fotoPerfil')";    

    //ejecutamos y verificamos si se guardaron los datos
    if (mysqli_query($conexion, $sql)){
    mkdir("../img/$usuario"); //creamos una carperta para el usuario
    copy("../img/default.jpg", "../img/$usuario/perfil.jpg");    //tendra una nueva foro de perfil la de default
    header("location: IniciarSesion.html"); //redirigir a iniciar sesion
    }

    else {
        echo "Error: ". $sql . "<br>" . mysqli_error($conexion);
    }

}else {
    echo "<script>
    alert('Usuario existente');
    window.location = 'registro.html';
</script>";
    }    

mysqli_close($conexion);
?>