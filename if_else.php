<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Processando Formulários</title>
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
                    <h1>Comandos If Else PHP</h1>
                </header>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                <h1>Operadores Condicionais PHP</h1>

                    <form role="form" action="calculos.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Digite o 1° numero" name="num1" id="num1" >
                            <input type="text" class="form-control" placeholder="Digite o 2° numero" name="num2" id="num2" >
                            <label for="operador">Nome do Operador</label>
                            <select class="form-control" name="id_operador" id="id_operador">
                                <option value="0">Seleciona um operador</options>
                                <option value="1"> igual a</option>
                                <option value="2"> identico a</option>
                                <option value="3"> diferente</option>
                                <option value="4"> não identico</option>
                                <option value="5"> menor</option>
                                <option value="6"> maior</option>
                                <option value="7"> menor igual</option>
                                <option value="8"> maior igual</option>
                            </select>                            
                        </div>
                        <button type="submit" class="btn btn-primary">Ver Resultado</button>
                    </form>

                </div>
                <div class="col-md-4">
                <h1>Operadores Lógicos</h1>
                <form role="form" action="calculos.php" method="post">
                        <div class="form-group">
                        <label for="condicional">Condicional 1</label>
                            <input type="text" class="form-control" placeholder="Digite o 1° numero" name="n1" id="n1">
                            <input type="text" class="form-control" placeholder="Digite o 2° numero" name="n2" id="n2">
                            <select class="form-control" name="id_condicional1" id="id_condicional1">
                                <option value="0">Seleciona um operador</options>
                                <option value="1"> igual a</option>
                                <option value="2"> identico a</option>
                                <option value="3"> diferente</option>
                                <option value="4"> não identico</option>
                                <option value="5"> menor</option>
                                <option value="6"> maior</option>
                                <option value="7"> menor igual</option>
                                <option value="8"> maior igual</option>
                            </select>  
                            <label for="condicional">Condicional 2</label>
                            <input type="text" class="form-control" placeholder="Digite o 3° numero" name="nm3" id="nm3">
                            <input type="text" class="form-control" placeholder="Digite o 4° numero" name="nm4" id="nm4">
                            <select class="form-control" name="id_condicional2" id="id_condicional2">
                                <option value="0">Seleciona um operador</options>
                                <option value="1"> igual a</option>
                                <option value="2"> identico a</option>
                                <option value="3"> diferente</option>
                                <option value="4"> não identico</option>
                                <option value="5"> menor</option>
                                <option value="6"> maior</option>
                                <option value="7"> menor igual</option>
                                <option value="8"> maior igual</option>
                            </select>  
                            <label for="operador">Operação Lógica</label>
                            <select class="form-control" name="id_logico" id="id_logico">
                                <option value="0">Seleciona um operador</options>
                                <option value="1"> && ou AND</option>
                                <option value="2"> || ou OR a</option>
                                <option value="3"> XOR</option>
                                <option value="4"> ! </option>
                            </select>                            
                        </div>
                        <button type="submit" class="btn btn-primary">Ver Resultado</button>
                    </form>
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row">
                   <div class="col-md-12" style="heigth=300px;">
                   
                    </div>
                </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>