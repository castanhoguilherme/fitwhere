<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FITWHERE, Mexa-se!</title>

        <meta name="author" content="Guilherme">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Chama o menu superior na pasta model -->
                    <?php include('../Model/bar_nav.php'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-3" align="center">
                    <img alt="Foto de perfil" src="http://lorempixel.com/150/150" class="img-thumbnail"> 

                </div>
                <div class="col-md-6" align="center">

                    <h2>Treinos</h2>

                </div>

                <div class="col-md-1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                   <?php include('../Model/bar_lateral.php'); ?>
                </div>
                <div class="col-md-6">
                    <h3>Corridas</h3>
                    <div id="morris-bar-chart-corridas" style="height: 250px;" align="center"></div>
                    <h3>Musculação</h3>
                    <div id="morris-bar-chart-musculacao" style="height: 250px;" align="center"></div>

                </div>
            </div>

            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>

        <script>

            new Morris.Bar({
                element: 'morris-bar-chart-corridas',
                data: [
                    {y: 'Segunda', a: 100, b: 90},
                    {y: 'Terça', a: 75, b: 65},
                    {y: 'Quarta', a: 50, b: 40},
                    {y: 'Quinta', a: 75, b: 65},
                    {y: 'Sexta', a: 50, b: 40},
                    {y: 'Sabado', a: 75, b: 65},
                    {y: 'Domingo', a: 100, b: 90}
                ],
                xkey: 'y',
                ykeys: 'a',
                labels: 'Corrida',
                hideHover: 'auto',
                resize: true
            });
            new Morris.Bar({
                element: 'morris-bar-chart-musculacao',
                data: [
                    {y: 'Segunda', a: 100, b: 90},
                    {y: 'Terça', a: 75, b: 65},
                    {y: 'Quarta', a: 50, b: 40},
                    {y: 'Quinta', a: 75, b: 65},
                    {y: 'Sexta', a: 50, b: 40},
                    {y: 'Sabado', a: 75, b: 65},
                    {y: 'Domingo', a: 100, b: 90}
                ],
                xkey: 'y',
                ykeys: 'a',
                labels: 'Corrida',
                hideHover: 'auto',
                resize: true
            });


        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>