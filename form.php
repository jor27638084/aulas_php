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
                    <h1>Nova Aba PHP </h1>
                </header>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            </div>
            
            
            <h1Descrição></h1>
                   <div class="col-md-12">
                   <?php
                            $id_produto3 = $_POST['id_produto3'];
                            
                            $detalhes3[9] = "
                            <div>
                            <h1>Detalhes Carro</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes3[10] = "
                            <div>
                            <h1>Deatlhes do Casa</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes3[11] = "
                            <div>
                            <h1>Detalhes do Bicicleta</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";
                            $detalhes3[12] = "
                            <div>
                            <h1>Detalhes da MOto</h1>
                            <p>Lorem ipsum velit nisi vel mi elementum non donec ultricies, ac dapibus ipsum egestas commodo imperdiet purus posuere class urna, mattis a integer himenaeos placerat cubilia turpis himenaeos. massa vehicula suscipit quis sed libero duis luctus sapien dolor leo, quisque rutrum porttitor dui eget integer a lacinia aliquet, sagittis vitae potenti malesuada ultrices cras lacus ipsum ac. sit placerat aliquam sagittis gravida ultrices leo ligula quam nec hac, tincidunt erat congue ultricies mauris ac tincidunt nec egestas mi suspendisse, orci nisl quam nec nisi quis cursus sociosqu orci. congue dolor quam auctor molestie interdum rutrum euismod fringilla, maecenas orci arcu pharetra dictumst fringilla pharetra iaculis, et condimentum congue risus blandit tincidunt ipsum. 
                            </p>
                            </div>";

                            echo $detalhes3[$id_produto3]; 
                        ?>
                        <?

                        ?>
                    </div>
                </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>