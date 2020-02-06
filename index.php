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
                    <h1>Learning PHP</h1>
                </header>
                <div class="navbar-header">
                    <a class="navbar-brand" href="if_else.php">If, Else</a>
                    <a class="navbar-brand" href="aritmetica.php">Calculos Aritméticos Elementar</a>
                    <a class="navbar-brand" href="laço_repeticao.php">Laços PHP</a>
                    <a class="navbar-brand" href="funcoes_php.php">Funções PHP</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <h1>Método Get</h1>
                    <?php
                        /* O atributo action e o atribute method: post só funcionou dentro da tag <form> */
                    ?>
                    <form role="form" action="index.php" method="get">
                        <div class="form-group">
                            <label for="Produto">Nome do Produto</label>
                            <select class="form-control" name="id_produto" id="id_produto">
                                <option value="1">Cadeira</option>
                                <option value="2">Fogão</option>
                                <option value="3">Roteador Wi-Fi</option>
                                <option value="4">Tv 42 polegadas</option>
                            </select>                            
                        </div>
                        <button type="submit" class="btn btn-danger">Ver Detalhes</button>
                    </form>
                </div>
                <div class="col-md-4">
                <h1>Método Post</h1>
                    <form role="form" action="index.php" method="post">
                        <div class="form-group">
                            <label for="id_produto2">Nome do Produto</label>
                            <select class="form-control" name="id_produto2" id="id_produto2">
                                <option value="5">Camisa</option>
                                <option value="5">Geladeira</option>
                                <option value="7">Armario</option>
                                <option value="8">Jogo de cama</option>
                            </select>                            
                        </div>
                        <button type="submit" class="btn btn-primary">Ver Detalhes</button>
                    </form>
                    <p>
                        Método post não está funcionando
                </div>
                <div class="col-md-4">
                    <h1>Resposta com uma folha PHP Externa</h1>
                    <form role="form" action="form.php" method="post">
                        <div class="form-group">
                            <label for="id_produto3">Nome do Produto</label>
                            <select class="form-control" name="id_produto3" id="id_produto3">
                                <option value="9">Carro</option>
                                <option value="10">Casa</option>
                                <option value="11">Bicicleta</option>
                                <option value="12">Moto</option>
                            </select>                            
                        </div>
                        <button type="submit" class="btn btn-primary">Ver Detalhes</button>
                    </form>
                </div>
                
            </div>
            <div class="row">
            <h1>Detalhes do produto</h1>
                   <div class="col-md-12">
                   <?php
                            $id_produto = $_GET['id_produto'];
                            
                            $detalhes[1] = "
                            <div>
                            <h1>Detalhes cadeira</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes[2] = "
                            <div>
                            <h1>Deatlhes do fogão</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes[3] = "
                            <div>
                            <h1>Detalhes do roteador</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes[4] = "
                            <div>
                            <h1>Detalhes da tv</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";

                            echo $detalhes[$id_produto]; 
                        ?>
                        <?php
                            $id_produto2 = $_POST['id_produto2'];
                            
                            $detalhes2[5] = "
                            <div>
                            <h1>Detalhes Camisa</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes2[6] = "
                            <div>
                            <h1>Deatlhes da Geladeira</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes2[7] = "
                            <div>
                            <h1>Detalhes do armario</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes2[8] = "
                            <div>
                            <h1>Detalhes do Jogo de Cama</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";

                            echo $detalhes2[$id_produto2];
                        ?>
                    </div>
                </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>