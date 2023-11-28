<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
    <title>ICO</title>
</head>
<body>
<a href="index.php" class='inicio'>Inicio</a> 
<br><br>
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