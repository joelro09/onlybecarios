<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Vacantes</title>
</head>
<body>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Titulo vacante</h2>
                <p class="fecha">01 Agosto 2019</p>
                <p class="descipcion">Asistente administrativo medio tiempo prestaciones de ley ultios semestres</p>
                <a href="#" class="continuar">Leer vacante</a>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/" alt="">
                    </a>
                </div>
                
            </article>
        </div>
    </div>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Titulo vacante</h2>
                <p class="fecha">01 Agosto 2019</p>
                <p class="descipcion">Asistente administrativo medio tiempo prestaciones de ley ultios semestres</p>
                <a href="#" class="continuar">Leer vacante</a>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/" alt="">
                    </a>
                </div>
                
            </article>
        </div>
    </div>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Titulo vacante</h2>
                <p class="fecha">01 Agosto 2019</p>
                <p class="descipcion">Asistente administrativo medio tiempo prestaciones de ley ultios semestres</p>
                <a href="#" class="continuar">Leer vacante</a>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/" alt="">
                    </a>
                </div>
                
            </article>
       </div>
       <?php  require 'paginacion.php';?> 
    </div>
<?php require 'footer.php'; ?>
</body>
</html>