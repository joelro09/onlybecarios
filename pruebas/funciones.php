<?php
echo pathinfo('documento.txt',PATHINFO_BASENAME);//'informacion del archivo
/*PATHINFO_DIRNAME obtiene directorio padre del archivo.
           EXTENSION obtiene extencion archivo.
           FILENAME devuelve solo el nombre dle documento.
      
           $resultados = glob('*'.php); Busca archivo por medio de un patron por ejemplo todos los archivo php    
$resultados = glob('*.{php,html,js,jpg,txt}',GLOB_BRACE);trae todos los archivos de cualquier extension especificada
           */
?>