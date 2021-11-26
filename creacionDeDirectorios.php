<?php

//Para crear directorios
$directorio = $_POST['nombreDirectorio'];

if (!file_exists($directorio)) {
    if (mkdir('Directorios' . "/$directorio", 0777)) { //Se crea el directorio
        header("Location: index.php");
    }
    else {
        echo 'Error al crear el directorio'; //Muestra si no se pudo crear
        header("Location: index.php");
    }
}
else {
    echo 'El directorio ya existe'; //Muestra si el directorio ya existe
    header("Location: index.php");

}
?>