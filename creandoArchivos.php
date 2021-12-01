<?php

//Para crear archivos de texto
$nombre = $_REQUEST['nombreArchivo'];
$contenido = $_REQUEST['contenidoArchivo'];

$file = fopen('archivosTxt' . "/$nombre" . '.txt', 'a+') or die ("Error al crear archivo"); //Se crea el archivo txt y se establece su ruta

fwrite($file, $contenido); //Se añade al archivo

fclose($file);

header("Location: index.php");

?>