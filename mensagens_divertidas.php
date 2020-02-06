<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
	
	
	<?php
		echo 'Variaveis PHP<br><br>';
		echo 'int - utiliza valores inteiros,<br> float - utiliza numeros fracionados,<br>string - utiliza cadeias de caracteres<br>';
		echo 'boolean - retorna valores por ex: verdadeiro ou falso, comumente usado em testess lógicos<br>';
		echo 'array - vetores ou matrizes<br><br>';
		echo 'Existem algumas regras para declaração de variáveis no PHP.<br>
		Regra 1: A variáveldeve ser iniciada com $<br>
		Regra 2: Uma variável não pode ser iniciada com espaços ou números.<br>
		Regra 3: Não é permitido o uso de caracteres especiais.<br><br>  ';
		echo 'PHP é uma inguagem case sensitive, ou seja, diferencia minusculas e maiusculas<br>';
		echo 'As variáveis não são de um tipo fixo, por ex int e somente int ou float e somente float<br>
		a linguagem reconhece que tal variavel possa pertencer a tal tipo mas isso não quer dizer que a variavel seja 
		somente aquele tipo';
		echo '<br><br>';
		echo 'Variavel de valor inteiro: ';
		$valor_int = 1;
		echo $valor_int + 10923;
		echo '<br>';
		echo 'Variavel de valor float: ';
		$valor_float = 2.4 * 345.89;
		echo $valor_float;
		echo '<br>';
		echo 'Variavel de valor boolean: ';
		$valor_boolean = true;
		echo $valor_boolean;
		echo '<br>';
		echo 'Variável string: ';
		$texto = 'PHP Show';
		echo $texto;
	?>
	

	<?php
			echo '<br><br><br>';
			echo 'Teste de impressão com echo<br>';
			print 'Teste de impressão com print<br><br>';

			echo 'echo é usado como um construtor da linguagem
		print nas versões mais antigas do PHP era usado como uma função
		pelo fato do print ter sido usado como função ele também retornava valores
		o print é executado em duas etapas (impressão da mensagem e retorno de valor) por isso ele é mais lento.
		No entanto este tempo de execução é imperceptível.'
		?>
		
		<?= '<br>Teste tag impressão'?>
	</body>
</html>