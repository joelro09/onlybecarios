<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilos_registro.css">
    <title>Registro</title>
</head>
<body>
<header class="login">   
    <a href="../index.php">Onlybecarios</a>  
</header>
<img src="../rocket-1976107_1280.png" alt="logo">

    <h1>Registrate</h1>
    <?php if(!empty($errores)): ?>
       <strong><?php echo $errores; ?></strong>
      <?php endif; ?>
      <?php if(!empty($mensaje)): ?>
       <strong><?php echo $mensaje; ?></strong>
      <?php endif; ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <input type="text" name="correo" placeholder="Ingresa tu email">
      <input type="text" name="nombre_usuario" placeholder="Nombre de usuario">
      <input type="password" name="password" placeholder="Ingresa tu contraseña">
      <input type="password" name="password2" placeholder="Confirma la contraseña">
      <input type="submit" name="enviar" value="Registrar">
</form>

<p>¿Ya tienes cuenta?</p> 
<a href="../login.view.php">Inicia Sesión</a>
    
</body>
</html>