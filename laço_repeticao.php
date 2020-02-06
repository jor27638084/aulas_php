<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Laços PHP</title>
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
                    <h1>Laços de repetição PHP</h1>
                </header>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Home</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                <?php
                    echo '<h3>Laço While</h3><br>';
                    echo '<p>De 0 a 100</p>';
                    $x = 0;
                    echo $x. ', ';
                        while($x < 100){
                            $x++;
                            if($x == 50){
                                continue;
                            }
                            echo $x. ', ';
                            
                        }
                    echo '<h3>Laço For</h3><br>';
                    echo '<p>De 30 a 100</p>';
                    for ($b = 30; $b <= 100; $b++){
                        echo $b. ', ';
                    }
                    $y = 35;
                    echo '<h3>Laço Do While</h3><br>';
                    echo '<p>De 35 a 70</p>';
                    do{
                        echo $y. ', ';
                        $y++;
                    }while($y <= 70);
                    ?>
                       
                </div>
                <div class="col-md-4">
                    <h3>Estrutura de repetição com array</h3>
                    <?php
                        $noticias = array();

                        $noticias[1]['titulo'] = '<h2>Noticia 1</h2>';
                        $noticias[1]['conteudo'] = '<p>Lorem ipsum felis risus aliquam justo odio dictumst fames, curabitur dui proin dui magna nec laoreet, nullam metus ipsum scelerisque eget et aenean. sociosqu dictum nisi netus diam enim platea suscipit, ut diam sagittis convallis justo hac quis, ad lacus rutrum etiam imperdiet fringilla. pretium turpis suspendisse metus id odio, fames est ut ultricies ultrices diam, posuere venenatis integer ullamcorper. </p>';

                        $noticias[2]['titulo'] = '<h2>Noticia 2</h2>';
                        $noticias[2]['conteudo'] = '<p>Lorem ipsum felis risus aliquam justo odio dictumst fames, curabitur dui proin dui magna nec laoreet, nullam metus ipsum scelerisque eget et aenean. sociosqu dictum nisi netus diam enim platea suscipit, ut diam sagittis convallis justo hac quis, ad lacus rutrum etiam imperdiet fringilla. pretium turpis suspendisse metus id odio, fames est ut ultricies ultrices diam, posuere venenatis integer ullamcorper. .</p>';

                        $noticias[3]['titulo'] = '<h2>Noticia 3</h2>';
                        $noticias[3]['conteudo'] = '<p>Lorem ipsum felis risus aliquam justo odio dictumst fames, curabitur dui proin dui magna nec laoreet, nullam metus ipsum scelerisque eget et aenean. sociosqu dictum nisi netus diam enim platea suscipit, ut diam sagittis convallis justo hac quis, ad lacus rutrum etiam imperdiet fringilla. pretium turpis suspendisse metus id odio, fames est ut ultricies ultrices diam, posuere venenatis integer ullamcorper. .</p>';

                        $noticias[4]['titulo'] = '<h2>Noticia 4</h2>';
                        $noticias[4]['conteudo'] = '<p>Lorem ipsum felis risus aliquam justo odio dictumst fames, curabitur dui proin dui magna nec laoreet, nullam metus ipsum scelerisque eget et aenean. sociosqu dictum nisi netus diam enim platea suscipit, ut diam sagittis convallis justo hac quis, ad lacus rutrum etiam imperdiet fringilla. pretium turpis suspendisse metus id odio, fames est ut ultricies ultrices diam, posuere venenatis integer ullamcorper. </p>';
                        $y = 1;
                        while($y <= 4){
                            echo $noticias[$y]['titulo'];
                            echo '<br>';
                            echo $noticias[$y]['conteudo'];
                            echo '<br>';
                            $y++;
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    <h3>Estrutura de repetição Foreach</h3>
                    <p>Foreach é uma estrutura de repetição especifica para arrays, com ele não precisamoss dizer o limimte do valor na variavel contida no laço, ele para automaticamente quando chega no fim do array.</p>
                    <?php
                        $produto[1] = 'Televisão';
                        $produto[2] = '<h2>Frigideira</h2>';
                        $produto[3] = '<h2>Sofá</h2>';
                        $produto[4] = '<h2>Cama</h2>';
                        $produto[5] =  '<h2>Carro</h2>';
                        $produto[6] = '<h2>Bicicleta<h2>';
                        $produto[7] = '<h2>Moto<h2>';
                        $produto[8] = '<h2>Arroz</h2>';
                        $produto[9] = '<h2>Feijão</h2>'; 
                        
                        foreach($produto as $pd){
                           
                            echo $produto. '<br>';
                        }
                    ?>
                </div>
                
            </div>
            <div class="row">
                   <div class="col-md-12">
                   
                    </div>
                </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ação.js"></script>
</html>