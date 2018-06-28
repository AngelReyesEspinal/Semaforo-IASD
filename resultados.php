<?php
    if($_POST){
        extract($_POST);
    }

    function amarillo($num){
        $resultado = ($num * 50);
        $resultado = $resultado / 100;

        return $resultado;
    }

    function verde($num){
        $resultado = ($num * 80);
        $resultado = $resultado / 100;

        return $resultado;
    }

    function semaforo($miembrosQueEstudiaron, $miembrosTotales){
        if($miembrosQueEstudiaron >= verde($miembrosTotales)){
            echo "<img class='animated pulse infinite' src='imagenes/verde.png' alt='' width='240px'>";
            echo "<h4 class='negrita center green darken-1 animated pulse infinite' style='color: white;'> ¡Excelente! </h4>";
        } else if ($miembrosQueEstudiaron < verde($miembrosTotales) && $miembrosQueEstudiaron >= amarillo($miembrosTotales)) {
            echo "<img class='animated pulse infinite' src='imagenes/amarillo.png' alt='' width='240px'>";
            echo "<h4 class='negrita center yellow accent-4 animated pulse infinite' style='color: white;'> ¡Bien! </h4>";
        } else {
            echo "<img class='animated tada infinite' src='imagenes/rojo.png' alt='' width='240px'>";
            echo "<h4 class='negrita center red darken-1 animated pulse infinite' style='color: white;'> ¡Esfuérzate! </h4>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Semáforo | IASD</title>
        <link rel="stylesheet" href="animate.css">
        <link rel="icon" href="imagenes/icon.png" type="image/png" sizes="16x16">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <style>
            body {
                background-image: url("imagenes/fondo.jpg");
                background-attachment: fixed;
                background-size: 100%;
                background-repeat: no-repeat;
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            main {
                flex: 1 0 auto;
            }

            .hf{
                color: #FEE7B0 !important;
            }

            .negrita{
                font-weight:bold!important;
            }

            .espacioArriba{
                margin-top:25px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper grey darken-4">
                    <img class="" src="imagenes/logo iglesia.png" alt="Logo Iglesia" width="60px">
                    <img class="right" src="imagenes/logo iglesia.png" alt="Logo Iglesia" width="60px">
                    <a href="http://localhost/semaforo/index.php" class="brand-logo right center hf"> Iglesia Adventista Los Corales</a>
                </div>
            </nav>            
        </header>
        
        <main class="container">
            <div class="espacioArriba">
            </div>
            <div class="row">
                <!-- clase A -->
                <div class="col s3 animated zoomIn">
                    <h4 class="center negrita">Clase A</h4>
                    <h5 class="center negrita">Juan / Camilo</h5>
                    <?php semaforo($miembrosQueEstudiaronA, $miembrosTotalesA); ?>
                </div>
                
                <!-- clase B -->
                <div class="col s3 animated zoomIn">
                    <h4 class="center negrita">Clase B</h4>
                    <h5 class="center negrita">Sory / Ivan</h5>
                    <?php semaforo($miembrosQueEstudiaronB, $miembrosTotalesB);?>                   
                </div>

                <!-- clase C -->
                <div class="col s3 animated zoomIn">
                    <h4 class="center negrita">Clase C</h4>
                    <h5 class="center negrita">Espejo / Mayreni</h5>
                    <?php semaforo($miembrosQueEstudiaronC, $miembrosTotalesC);?>
                </div>

                <!-- clase D -->
                <div class="col s3 animated zoomIn">
                    <h4 class="center negrita">Jóvenes</h4>
                    <h5 class="center negrita">Jenrry / Erodita</h5>
                    <?php semaforo($miembrosQueEstudiaronD, $miembrosTotalesD);?>
                </div>
            </div>
        </main>
        
        <footer class='page-footer grey darken-4'>
            <div class='footer-copyright'>
                <div class='container'>
                    <a class='hf right' href='#!'>© Iglesia Adventista Los Corales</a>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>