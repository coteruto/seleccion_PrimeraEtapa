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
        if (session_id() === '')
            session_start();
        $fecha_calculada1 = $_SESSION['fecha_calculada1'];
        $fecha_calculada2 = $_SESSION['fecha_calculada2'];
        $fecha_calculada3 = $_SESSION['fecha_calculada3'];
        $fecha_calculada4 = $_SESSION['fecha_calculada4'];
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span><b>Fechas calculadas</b></span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <span><b>Fecha 1: </b></span>
                                       <span><?php echo $fecha_calculada1; ?></span>
                                       <br><br>
                                       <span><b>Fecha 2: </b></span>
                                       <span><?php echo $fecha_calculada2; ?></span>
                                       <br><br>
                                       <span><b>Fecha 3: </b></span>
                                       <span><?php echo $fecha_calculada3; ?></span>
                                       <br><br>
                                       <span><b>Fecha 4: </b></span>
                                       <span><?php echo $fecha_calculada4; ?></span>
                                       <br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <a href="../seleccion_primeraEtapa?volver=true"><button class="btn btn-primary">Volver</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
