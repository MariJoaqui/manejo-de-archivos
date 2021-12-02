<?php

//Para editar contenido de archivos de texto
$contenido = $_REQUEST['contenidoNuevo'];
$archivos = $_REQUEST['file'];
$ruta = $_SERVER['DOCUMENT_ROOT'] . '/manejo-de-archivos/archivosTxt';

    
$fp = fopen($ruta."/$archivos", 'w+') or die ("Ocurrió un error");

while(!feof($fp)){
    $obtener = fgets($fp);
    $obtener2 = nl2br($obtener);

    fwrite($fp, $contenido.$obtener2); 
}
fclose($fp);

header("Location: crearTxt.php");
?>