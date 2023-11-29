<?php
$host_db = "sql313.infinityfree.com";
$user_db = "if0_35204113";
$pass_db = "cAFysVsPgT6JCz";
$db_name = "if0_35204113_asistencia";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
?>
