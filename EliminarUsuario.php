<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" class="style">
    <title>Document</title>
</head>

<body>
    <h1 style=" text-align: center;" >Elimina Usuario</h1>
    <form class='formulario' method="POST" action="deleteUsuario.php">

        <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" class="tamaño" />
        <br><br>
        <button type="submit" class='raise'>Eliminar usuario</button>

    </form>
    
    <h1><a href="lectura.php" class='opciones'>Inicio de listas</a></h1>

</body>

</html>