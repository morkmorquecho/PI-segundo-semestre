<?php
//nos conectamos a la base de datos
include('conexion.php');

//guardamos en las variables datos de la base de datos
$USUARIO= $_POST['usuario'];
$PASSWORD= $_POST['password'];

//selecionamos la tabla de cuentas y escogemos la columna de usuarios y password
$consulta="SELECT*FROM cuentas WHERE usuario='$USUARIO' and password='$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);
//si los datos guardados en $filas son correctos procedemos 
if($filas){
    session_start();
    $_SESSION["usuario"] = $_POST["usuario"];
    header("location:Confirmacion.php"); 

}else{
    echo "<script>
        alert('Usuario o Password incorrecto');
        window.location = 'IniciarSesion.html';
    </script>";

}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>