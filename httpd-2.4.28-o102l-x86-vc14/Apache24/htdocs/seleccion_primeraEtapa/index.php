<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <?php
        include_once 'app/Validador.inc.php';
        include_once 'app/Redireccion.inc.php';
        include_once 'app/Calculador.inc.php';
        
        if(isset($_GET["volver"])){
            if(session_id() === '')
                session_start();
            if(isset($_SESSION['fecha_calculada1']))
                unset($_SESSION['fecha_calculada1']);
            if(isset($_SESSION['fecha_calculada2']))
                unset($_SESSION['fecha_calculada2']);
            if(isset($_SESSION['fecha_calculada3']))
                unset($_SESSION['fecha_calculada3']);
            if(isset($_SESSION['fecha_calculada4']))
                unset($_SESSION['fecha_calculada4']);
            session_destroy();
            Redireccion::redirigir("../seleccion_primeraEtapa");
        }
        
        if (isset($_POST['submit'])){
            $validador = new Validador($_POST['fecha1'],$_POST['fecha2'],$_POST['fecha3'],$_POST['fecha4'],
                                                $_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4']);
            if($validador->formularioCorrecto()){
                if(session_id() === '')
                    session_start();
                $_SESSION['fecha_calculada1'] = Calculador::calcularFecha($validador->getFecha1(),$validador->getNumero1());
                $_SESSION['fecha_calculada2'] = Calculador::calcularFecha($validador->getFecha2(),$validador->getNumero2());
                $_SESSION['fecha_calculada3'] = Calculador::calcularFecha($validador->getFecha3(),$validador->getNumero3());
                $_SESSION['fecha_calculada4'] = Calculador::calcularFecha($validador->getFecha4(),$validador->getNumero4());
                Redireccion::redirigir("resultado.php");
            }
        }
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span><b>Calculadora de fechas</b></span>
                        </div>
                        <div class="card-body">
                            <div class="text-justify">
                                <span>A continuación, deberá ingresar las fechas iniciales y la cantidad de días que desee sumar
                                    a cada una de ellas. Las fechas ingresadas deberán estar en orden creciente y no deben
                                    coincidir con fines de semana. Todos los campos son obligatorios.</span>
                                <br><br>
                            </div>
                            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                                <?php
                                    if (isset($_POST['submit']))
                                        include_once 'plantillas/formulario_validado.inc.php';
                                    else
                                        include_once 'plantillas/formulario_inicial.inc.php';
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>

