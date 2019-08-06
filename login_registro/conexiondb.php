<?php
$host = 'localhost';
$base = 'usuarios';
$us = 'root';
$contrasena = '';
try {
   $conexion = new PDO("mysql:host=$host;dbname=$base",$us,$contrasena);
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}

?>