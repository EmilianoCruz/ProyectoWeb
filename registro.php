<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registro</title>
 <meta charset = "utf-8">
 <link rel="stylesheet" href ="estilos.css">
 <link rel="shortcut icon" href="Media/web.png" type="image/x-icon">
<title>Proyecto</title>
</head>


<script>

    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>
 <header>
 <a href="index.php" class='inicio'>
    <img src="Media/inicio.png" alt="Icono de inicio" width="40" height="40">
    Inicio
</a> 
<br><br>
 <h1 style="text-align:center">Registro </h1>
</header>

<div class="formulario">
<form action="submit_registro.php" method="post">

 <hr />
 <!--Nombre-->
 <div class="form-group">
 <label for="nombre">Nombre Completo:</label><br>
 <input type="text" name="usuario" maxlength="255"  required>
 <br/><br/>
 </div>
 <!-- Direcion -->
<div class="form-group">
<label for="direcion">Direccion:</label><br>
<input type="text" name="direccion" maxlength="255" required>
<br/><br/>
</div>
<!-- Telefono -->
<div class="form-group">
<label for="telefono">Telefono:</label><br>
<input type="text" onkeypress="return valida(event)" name="telefono" maxlength="15" required>
<br/><br/>
</div>
<!-- Email -->
<div class="form-group">
<label for="correo">Email:</label><br>
<input type="email" name="correo" maxlength="35" required>
<br/><br/>
</div>
<!--Nombre_usuario-->
<div class="form-group">
<label for="nombre">Nombre Usuario:</label><br>
<input type="text" name="nombre_usuario" maxlength="255"  required>
<br/><br/>
</div>
<!--N° de cuenta-->
<div class="form-group">
<label for="numero">N° de cuenta Usuario:</label><br>
<input type="text" onkeypress="return valida(event)" name="no_cuenta" maxlength="10"  required>
<br/><br/>
</div>
<!--Password-->
<div class="form-group">
<label for="pass">Password:</label><br>
<input type="password" name="password" maxlength="8" required>
</div>
<br/><br/>
<input type="submit" name="submit" class='raise' value="Registrarme">
<input type="reset" name="clear" class='raise' value="Borrar">
    
</form>
</div>

</body>
</html>