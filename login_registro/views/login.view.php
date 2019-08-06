<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilos_registro.css">
    <title>Login</title>
</head>
<body>

<header class="login">    
    <a href="index.php">Onlybecarios</a>    
</header>

<img src="rocket-1976107_1280.png" alt="logo"> 
<h1>Iniciar Sesión</h1>
<?php if(!empty($errores)): ?>
 <strong><?php echo $errores; ?></strong> 
<?php endif; ?>

<div>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<input type="text" name="correo" placeholder="Ingresa correo">
<input type="password" name="password" placeholder="Ingresa tu contraseña">
<input type="submit" value="Iniciar Sesión">
</form>
</div>
<p>¿Aún no te registras?</p> 
<a href="views/registro.view.php">Registrate</a>
    
</body>
</html>
