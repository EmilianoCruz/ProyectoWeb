<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="Media/web" type="image/x-icon">
    <title>Proyecto</title>
</head>
<body>
<a href="index.php" class='inicio'>
    <img src="Media/inicio.png" alt="Icono de inicio" width="40" height="40">
    Inicio
</a> 
<form action="principal.php" method="post">
    <div class="ventana">
        <br>
        <label for="nombre_usuario">Nombre usuario</label><br>
        <input type="text" name="nombre_usuario" required placeholder="Ingresa tu usuario" class="tamaño">
        <br><br>
        <label for="contraseña">Ingresa tu contraseña</label><br>
        <input type="password" name="password" required placeholder="Contraseña" class="tamaño">
        <br><br>
        <button class='raise'>Iniciar sesion</button>
        <br><br>

    </div>


</form>
</body>
</html>