<?php

//proceso de descarga de archivos
$entrada = $_REQUEST['file']; //Archivo a descargar

$ruta = 'archivosTxt/'; //Carpeta donde se encuentra el archivo
$rutaCompleta = $ruta.$entrada; //Ruta completa del archivo
$type = '';

//Proceso de verificación
header("Content-Type: $type");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; filename=" . $entrada. "");
header("Content-Transfer-Encoding: binary");

readfile($rutaCompleta); //Se descarga

?>