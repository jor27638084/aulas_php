<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Funções</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/responf/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <header style="text-align: center;">
                    <h1>Funções PHP</h1>
                </header>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Home</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php
                        function boasVindas(){
                            echo '<h1>Boas vindas!!</h1>';
                            echo '<p>Esta é uma função PHP sem retorno. </p>';
                        }
                        boasVindas();
                        
                        echo '<br><br>';

                        function calculoAbstrato(){
                            return (2/8)*7+10-11;
                        }
                        echo '<h4>(2/8)*7+10-11 = <h4>' .calculoAbstrato();
                        echo '<p>Esta é uma função PHP com retorno. </p>';  
                    ?>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
            
            </div>
            <div class="row">
                   <div class="col-md-12" ></div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>