<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <title>Vacantes</title>
</head>
<body>
    <header>

        <div class="contenedor">
        <img src="imagenes/rocket.png" alt="logo">
            <div class="logo izquierda">
                <p><a href="#">OnlyBecarios</a></p>
            </div>

            <div class="derecha">
               <form name ="busqueda" class = "buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
               <input type="text" name="busqueda" placeholder="Buscar vacante">
               <input type="submit" class="iconobuscar" value="Buscar">
               </form> 

               <nav class="menu">
               <ul>
               <li><a href="#"><i><img src="imagenes/facebook.png" alt="icono facebook"></i></a></li>
               <li><a href="#"><i><img src="imagenes/twitter.png" alt="icono twitter"></i></a></li>
               </ul>
               </nav>
            </div>
        </div>
    </header>

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Titulo vacante</h2>
                <p class="fecha">01 Agosto 2019</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/" alt="">
                </a>
                </div>
            </article>
        </div>
    </div>

</body>
</html>