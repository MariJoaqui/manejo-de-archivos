<?php

//Para editar contenido de archivos de texto
$contenido = $_REQUEST['contenidoNuevo'];

$abrir = 'ArchivosTxt'; //Carpeta de archivos

    if ($open = opendir($abrir)) {
        while ($archivo = readdir($open)) {
            if ($archivo != '.' && $archivo != '..') {
               $fp = fopen('archivosTxt' . "/$archivo", 'w+') or die ("Ocurrió un error");
  
                while(!feof($fp)){
                    $obtener = fgets($fp);
                    $obtener2 = nl2br($obtener);
                    
                    fwrite($fp, $contenido.$obtener2);
                }
                fclose($fp);
            }
        }
    }

    header("Location: index.php");

?>