<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');


$consulta_sql="SELECT * FROM usuarios";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado); 
 
echo "<table border='2'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Nombre usuario</th>
        <th>Numero de cuenta</th> 
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['id'] ."</td>";
     echo"<td>". $row['nombre'] ."</td>";
     echo"<td>". $row['direccion'] ."</td>";
     echo"<td>". $row['telefono'] ."</td>";
     echo"<td>". $row['correo'] ."</td>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['no_cuenta'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }

    echo "<h1><a href='EliminarUsuario.php'>ElimnarUsuario</a></h1>";

?>