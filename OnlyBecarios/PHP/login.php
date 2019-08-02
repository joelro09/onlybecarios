<?php
session_start();
$errores='';
$mensaje='';
if(isset($_SESSION['usuario'])){
    header('Location: sistemavacantes.php');
}
require 'conexiondb.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$correo = strtolower($_POST['correo']);
$password = $_POST['password'];
$password = hash('sha512',$password);

$captcha = $_POST['g-recaptcha-response'];
$c_secret = '6Lc3_60UAAAAAJ8flYEQaLeU9vohWWJ9MmZZQ4dn';

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$c_secret&response=$captcha");

var_dump($response);
$arr = json_decode($response, TRUE);

if ($arr['success']) {
  $mensaje .= 'Captcha Verificado';
}else{
    $errores .='Error al comprobar captcha<br/>';
}

if ($errores =='') {
    $statement=$conexion->prepare('SELECT * FROM users WHERE email = :correo AND pass = :password');
    $statement->execute(array(':correo'=> $correo,':password'=>$password));
    $resultado=$statement->fetch();
    
    if($resultado != false){
    $_SESSION['usuario']= $correo;
    header('Location: sistemavacantes.php');
    }else{
        $errores .=' Datos incorrectos, verifica tu correo o contraseña<br/>';
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/estilos_login.css">
    <title>Login</title> 
<script src = "https://www.google.com/recaptcha/api.js" async defer > </script>
</head>
<body>

<header class="login">    
    <a href="index.php">Onlybecarios</a>    
</header>

<img src="rocket-1976107_1280.png" alt="logo"> 
<h1>Iniciar Sesión</h1>
<?php if(!empty($errores)): ?>
 <strong>&#120; <?php echo $errores; ?></strong> 
<?php endif; ?>
<?php if(!empty($mensaje)): ?>
       <strong> &#10004; <?php echo $mensaje; ?></strong>
      <?php endif; ?>
<section>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<input type="text" name="correo" placeholder="Ingresa correo">
<input type="password" name="password" placeholder="Ingresa tu contraseña">
<input type="submit" value="Iniciar Sesión">
<!--captcha-->
<div class = "g-recaptcha" data-sitekey = "6Lc3_60UAAAAAIHkU3XUhhhRDe6-TwFiXi9Yvp0F"> </div>
</form>
</section>

<p>¿Aún no te registras?</p> 
<a href="views/registro.view.php">Registrate</a>
    
</body>
</html>
