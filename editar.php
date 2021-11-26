<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <!--HEADER-->

    <nav class="nav-wrapper indigo lighten-4">
        <div class="container">
            <a href="index.html" class="brand-logo">Manejo de Archivos</a>

            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="crearTxt.php">Crear Txt</a></li>
                <li><a href="crearDirectorio.php">Crear Directorio</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="menu-responsive">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="crearTxt.php">Crear Txt</a></li>
        <li><a href="crearDirectorio.php">Crear Directorio</a></li>
    </ul>

    <!--BODY-->

    <div class="fondo-section">
        <div class="container section black-text">

            <div class="section">

                <h5>Editar contenido: </h5>

                <p>Aquí se pueden editar el contenido de los archivos txt.<br><br>
                    Escriba el nuevo contenido:
                </p>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form class="col s12" action="guardar.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea2" class="materialize-textarea" data-length="120" name="contenidoNuevo"></textarea>
                        <label class="indigo-text text-lighten-1" for="textarea2">Contenido</label>
                    </div>
                </div>

                <input type="hidden" name="formulario">
                <button class="btn waves-effect waves-light indigo lighten-1" type="submit" name="action btn">Guardar</button>
            </form>
        </div>
    </div>

    <!--FOOTER-->

    <footer class="page-footer indigo lighten-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">

                    <h5 class="white-text">Manejo de Archivos</h5>
                    <p class="grey-text text-lighten-4">En esta página se pueden crear Archivos Txt y Directorios, leer y 
                        descargarlos si así lo desea.
                    </p>
                
                </div>

                <div class="col l4 offset-l2 s12">

                    <h5 class="white-text">Menú</h5>

                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.php">Inicio</a></li>
                        <li><a class="grey-text text-lighten-3" href="crearTxt.php">crear Txt</a></li>
                        <li><a class="grey-text text-lighten-3" href="crearDirectorio.php">Crear Directorio</a></li>
                    </ul>

                </div>
            </div>
        </div>

            <div class="footer-copyright">
                <div class="container">

                © 2021 María Moreno - Programación Web
             
                </div>
            </div>

    </footer>

    <!--SCRIPT-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>