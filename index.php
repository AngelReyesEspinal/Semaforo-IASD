<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Semáforo | IASD</title>
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

            /* importante */
            
            /* label color */
            .input-field label {
                color: #000;
            }

            /* label underline focus color */
            .input-field input[type=number] {
                border-bottom: 1px solid #000!important;
                box-shadow: 0 1px 0 0 #000!important;
            }

            /* label focus color */
            .input-field input[type=number]:focus + label {
                color: #e53935!important;
            }

            /* label underline focus color */
            .input-field input[type=number]:focus {
                border-bottom: 1px solid #e53935!important;
                box-shadow: 0 1px 0 0 #e53935!important;
            }
            
            /* icon prefix focus color */
            .input-field .prefix.active {
                color: #e53935!important;
            }

            /* valid color */
            .input-field input[type=number].valid {
                border-bottom: 1px solid #4caf50!important;
                box-shadow: 0 1px 0 0 #4caf50!important;
            }

            /* fin */

        </style>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper grey darken-4">
                    <img class="" src="imagenes/logo iglesia.png" alt="Logo Iglesia" width="60px">
                    <img class="right" src="imagenes/logo iglesia.png" alt="Logo Iglesia" width="60px">
                    <a href="#" class="brand-logo right center hf"> Iglesia Adventista Los Corales</a>
                </div>
            </nav>            
        </header>
        
        <main class="container">
            <div class="row">
                <form class="col s12" action="resultados.php" method="post">
                    <div class="row">

                        <!-- CLASE A -->
                        <h4 class="negrita">Clase A</h4>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="ea" type="number" class="validate" name="miembrosQueEstudiaronA" required="" aria-required="true">
                            <label for="ea">Miembros que estudiaron clase <span class="negrita">A</span> </label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="ta" type="number" class="validate" name="miembrosTotalesA" required="" aria-required="true">
                            <label for="ta">Cantidad de miembros clase <span class="negrita">A</span></label>
                        </div>

                        <!-- CLASE B -->
                        <h4 class="negrita">Clase B</h4>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="eb" type="number" class="validate" name="miembrosQueEstudiaronB" required="" aria-required="true">
                            <label for="eb">Miembros que estudiaron clase <span class="negrita">B</span></label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="tb" type="number" class="validate" name="miembrosTotalesB" required="" aria-required="true">
                            <label for="tb">Cantidad de miembros clase <span class="negrita">B</span></label>
                        </div>

                        <!-- CLASE C -->
                        <h4 class="negrita">Clase C</h4>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="ec" type="number" class="validate" name="miembrosQueEstudiaronC" required="" aria-required="true">
                            <label for="ec">Miembros que estudiaron clase <span class="negrita">C</span></label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>                            
                            <input id="tc" type="number" class="validate" name="miembrosTotalesC" required="" aria-required="true">
                            <label for="tc">Cantidad de miembros clase <span class="negrita">C</span></label>
                        </div>

                        <!-- CLASE D -->
                        <h4 class="negrita">Clase D</h4>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="ed" type="number" class="validate" name="miembrosQueEstudiaronD" required="" aria-required="true">
                            <label for="ed">Miembros que estudiaron clase <span class="negrita">D</span></label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">chevron_right</i>    
                            <input id="td" type="number" class="validate" name="miembrosTotalesD" required="" aria-required="true">
                            <label for="td">Cantidad de miembros clase <span class="negrita">D</span></label>
                        </div>

                        <div class="col s12 center" style="margin-top:20px;">
                            <button class="btn waves-effect grey darken-4 btn-large" type="submit" name="action"> CALCULAR </button>
                        </div>
                    </div>
                </form>
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