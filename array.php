<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Declarando Arrays</title>
	</head>

	<body>
        <?php
        echo 'Arrays simples primeira forma de declaração';
        echo '<br><br>';
        //aprendendo a declarar arrays
        //forma 1 de declarar arrays
            $lista_compra[1] = 'feijão, ';
            $lista_compra[2] = 'arroz, ';
            $lista_compra[3] = 'banana, ';
            $lista_compra[4] = '1 carrinho de concreto, ';
            $lista_compra[5] = '1 gibi da turma da monica, ';
            echo $lista_compra[4];
            echo '<br><br>';
            var_dump($lista_compra);
        //forma 2 de declaarar arrays
            $lista_compra2 = array(
            1 => 'jabuticaba, ', 
            2 => 'maçã, ', 
            3 => 'torta de chocolate, ', 
            4 => 908);
            echo $lista_compra2[3];
            var_dump($lista_compra2);
            echo '<br><br>';
        ?>
        <?php
        echo 'Array simples segunda forma de declaração';
         echo '<br><br>';
            $qualquer_tipo_de_mensagem = array(
            1 => 'O importante não é vencer todos os dias, mas lutar sempre.<br>',
            2 => ' Maior que a tristeza de não haver vencido é a vergonha de não ter lutado!<br>', 
            3 => 'É melhor conquistar a si mesmo do que vencer mil batalhas.<br>',
            4 => 'Quem ousou conquistar e saiu pra lutar, chega mais longe!<br>',
            5 => 'Enquanto houver vontade de lutar haverá esperança de vencer.<br>',
            6 => ' Difícil é ganhar um amigo em uma hora; fácil é ofendê-lo em um minuto.<br>'); 
            var_dump($qualquer_tipo_de_mensagem);
            echo '<br>';
            print_r($qualquer_tipo_de_mensagem); 
        ?>
        <?php
            echo '<br><br>';
            echo 'Arrays multidimensionais...<br><br>';
            echo 'O que é um array multidimensional? <br>';
            echo 'Resposta: é um array dentro de um array, ou seja uma matriz onde existe linhas e colunas.'
        ?>
        <?php
            echo '<br><br>';
            echo 'Tabuleiro de xadrez...<br><br>';
            $tabuleiro[8]['a'] = 'torre preta';
            $tabuleiro[8]['b'] = 'cavalo preto';
            $tabuleiro[8]['c'] = 'bispo preto';
            $tabuleiro[8]['d'] = 'rainnha preta';
            $tabuleiro[8]['e'] = 'rei preto';
            $tabuleiro[8]['f'] = 'bispo preto';
            $tabuleiro[8]['g'] = 'cavalo preto';
            $tabuleiro[8]['h'] = 'torre preta';

            $tabuleiro[7]['a'] = 'peão preto';
            $tabuleiro[7]['b'] = 'peão preto';
            $tabuleiro[7]['c'] = 'peão preto';
            $tabuleiro[7]['d'] = 'peão preto';
            $tabuleiro[7]['e'] = 'peão preto';
            $tabuleiro[7]['f'] = 'peão preto';
            $tabuleiro[7]['g'] = 'peão preto';
            $tabuleiro[7]['h'] = 'peão preto';

            $tabuleiro[6]['a'];
            $tabuleiro[6]['b'];
            $tabuleiro[6]['c'];
            $tabuleiro[6]['d'];
            $tabuleiro[6]['e'];
            $tabuleiro[6]['f'];
            $tabuleiro[6]['g'];
            $tabuleiro[6]['h'];

            $tabuleiro[5]['a'];
            $tabuleiro[5]['b'];
            $tabuleiro[5]['c'];
            $tabuleiro[5]['d'];
            $tabuleiro[5]['e'];
            $tabuleiro[5]['f'];
            $tabuleiro[5]['g'];
            $tabuleiro[5]['h'];

            $tabuleiro[4]['a'];
            $tabuleiro[4]['b'];
            $tabuleiro[4]['c'];
            $tabuleiro[4]['d'];
            $tabuleiro[4]['e'];
            $tabuleiro[4]['f'];
            $tabuleiro[4]['g'];
            $tabuleiro[4]['h'];

            $tabuleiro[3]['a'];
            $tabuleiro[3]['b'];
            $tabuleiro[3]['c'];
            $tabuleiro[3]['d'];
            $tabuleiro[3]['e'];
            $tabuleiro[3]['f'];
            $tabuleiro[3]['g'];
            $tabuleiro[3]['h'];
            
            $tabuleiro[2]['a'] = 'peão branco';
            $tabuleiro[2]['b'] = 'peão branco';
            $tabuleiro[2]['c'] = 'peão branco';
            $tabuleiro[2]['d'] = 'peão branco';
            $tabuleiro[2]['e'] = 'peão branco';
            $tabuleiro[2]['f'] = 'peão branco';
            $tabuleiro[2]['g'] = 'peão branco';
            $tabuleiro[2]['h'] = 'peão branco';

            $tabuleiro[1]['a'] = 'torre branca';
            $tabuleiro[1]['b'] = 'cavalo branco';
            $tabuleiro[1]['c'] = 'bispo branco';
            $tabuleiro[1]['d'] = 'rei branco';
            $tabuleiro[1]['e'] = 'rainha branca';
            $tabuleiro[1]['f'] = 'bispo branco';
            $tabuleiro[1]['g'] = 'cavalo branco';
            $tabuleiro[1]['h'] = 'torre branca';

            print_r($tabuleiro);
            echo '<br><br>';
            print $tabuleiro[8]['e'];
        ?>
	</body>
</html>