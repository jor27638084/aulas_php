<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Operadores Aritméticos</title>
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
                    <h1>Calculos Aritméticos</h1>
                </header>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <a class="navbar-brand" href="if_else.php">Pagina de  Calculos Lógicos</a>
                </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                <h1>Operadores Lógicos</h1>
                <form role="form" action="aritmetica.php" method="post">
                        <div class="form-group">
                        <label for="condicional">Calculo</label>
                            <input type="text" class="form-control" placeholder="Digite o 1° numero" name="n1" id="n1">
                            <select class="form-control" name="id_operador" id="id_operador">
                                <option value="0">Seleciona um operador</options>
                                <option value="1"> Adição</option>
                                <option value="2"> Multiplicação</option>
                                <option value="3"> Subtração</option>
                                <option value="4"> Divisão</option>
                                <option value="5"> Módulo </option>
                            </select>   
                            <input type="text" class="form-control" placeholder="Digite o 2° numero" name="n2" id="n2">                           
                        </div>
                        <button type="submit" class="btn btn-primary">Ver Resultado</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </row>
            
            </div>
            <div class="row">
                   <div class="col-md-12" >
                   <?php
                   $num2 = $_POST['n2'];
                   $num1 = $_POST['n1'];
                   
                    $operadores = $_POST['id_operador'];
                  
                      switch($operadores){
                        case 1:
                             echo $num1.'  +  '.$num2.'  = '.$num1 + $num2;
                        break;
                        case 2:
                            echo $num1. ' * ' .$num2. ' = '.$num1 * $num2;
                        break;
                        case 3:
                            echo $num1. ' - ' .$num2. ' = '.$num1 - $num2;
                        break;
                        case 4:
                            echo $num1. ' / ' .$num2. ' = '.$num1 / $num2;
                        break; 
                        case 5:
                            echo $num1. ' % ' .$num2. ' = '.$num % $num2;
                        break;
                    }  
                   ?>
             
                    </div>
                </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>