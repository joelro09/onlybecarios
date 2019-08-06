<?php

$server='localhost';
$usuario='root';
$contrasena='';
$database='onlybecarios';
try{
    $conexion= new PDO("mysql:host=$server;dbname=$database",$usuario,$contrasena);
}catch(PDOException $error){
echo 'Fallo la conexion: ' . $error->getMessage();
die();
}

?>