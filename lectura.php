<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tu Título</title>
</head>
<body>

<h1>Listas</h1>
<div class="container">
    <?php
    $consulta_sql = "SELECT * FROM usuarios";
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

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "<td>" . $row['nombre_usuario'] . "</td>";
            echo "<td>" . $row['no_cuenta'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h1 class='sin-registro'>Sin Ningun registro</h1>";
    }

    echo "<h1 class='opciones'><a href='EliminarUsuario.php'>Eliminar Usuario</a></h1>";
    ?>
</div>

</body>
</html>
