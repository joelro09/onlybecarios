<?php session_start();

if(isset($_SESSION['usuario'])){
    echo 'Hola';
} else{
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>

    <a href="../logout.php">cerrar sesión</a>
</body>
</html>