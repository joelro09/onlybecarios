<?php
function contar_usuarios(){
$archivo = 'documento.txt';

if(file_exists($archivo)){
    $cuenta = file_get_contents($archivo) + 1;
    file_put_contents($archivo,$cuenta);

    return $cuenta;
}else {
    file_put_contents($archivo,1);
    return 1;
}
}
echo contar_usuarios();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de visitas</title>
</head>
<body>
    
</body>
</html>