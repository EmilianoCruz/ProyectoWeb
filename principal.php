<?php
include "conexion.php";

$usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) AS contar FROM usuarios WHERE nombre_usuario= '$usuario' AND password = '$password'";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    echo "Ingresaste";
    header("location: ./lectura.php");
}else{

        header("location: ./index.php");

echo "error";
   
}


?>