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
                    <a class="navbar-brand" href="if_else.php">Pagina de  Calculos Lógicos</a>
                </div>
            </div>
            
            </div>
            <div class="row">
                   <div class="col-md-12" >
                   <?php
                   $num2 = $_POST['num2'];
                   $num1 = $_POST['num1'];
                   
                    $operadores = $_POST['id_operador'];
                   
                    
                    switch($operadores){
                        case 1: 
                            if ($num1 == $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso</h1>';
                            }
                        break;
                        case 2:
                            if ($num1 === $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        case 3:
                            if ($num1 != $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        case 4:
                            if ($num1 !== $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        case 5:
                            if ($num1 < $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        case 6: 
                            if ($num1 > $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        case 7:
                            if ($num1 <= $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        case 8:
                            if ($num1 >= $num2){
                                echo '<h1>O resultado é verdadeiro.</h1>';
                            }else{
                                echo '<h1>O resultado é falso.</h1>';
                            }
                        break;
                        

                    }
                   ?>
                <?php
                      
                      $condicional1 = $_POST['id_condicional1'];
                      $n1 = $_POST['n1'];
                      $n2 = $_POST['n2'];
  
                      switch($condicional1){
                          case 1: 
                              if ($n1 == $n2){
                                  $txt = $n1. ' == ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' == ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso</h1>';
                              }
                          break;
                          case 2:
                              if ($n1 === $n2){
                                  $txt = $n1. ' === ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' === ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                          case 3:
                              if ($n1 != $n2){
                                  $txt = $n1. ' != ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' != ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                          case 4:
                              if ($n1 !== $n2){
                                  $txt = $n1. ' !== ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' !== ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                          case 5:
                              if ($n1 < $n2){
                                  $txt = $n1. ' < ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' < ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                          case 6: 
                              if ($n1 > $n2){
                                  $txt = $n1. ' > ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' > ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                          case 7:
                              if ($n1 <= $n2){
                                  $txt = $n1. ' <= ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' <= ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                          case 8:
                              if ($n1 >= $n2){
                                  $txt = $n1. ' >= ' .$n2;
                                  echo $txt;
                                  $valor = true;
                                  echo '<h1>O resultado é verdadeiro.</h1>';
                              }else{
                                  $txt = $n1. ' >= ' .$n2;
                                  echo $txt;
                                  $valor = false;
                                  echo '<h1>O resultado é falso.</h1>';
                              }
                          break;
                      }
                       
                      $n3 = $_POST['nm3'];
                      $n4 = $_POST['nm4'];
                      $condicional2 = $_POST['id_condicional2'];
  
                         // condicional do nm3 e nm4
                          switch($condicional2){
                              case 1: 
                                  if ($n3 == $n4){
                                      $valor2 = true;
                                      $txt2 = $n3. ' == ' .$n4;
                                      echo $txt2;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' == ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso</h1>';
                                  }
                              break;
                              case 2:
                                  if ($n3 === $n4){
                                      $txt2 = $n3. ' === ' .$n4;
                                      echo $txt2;
                                      $valor2 = true;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' === ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;
                              case 3:
                                  if ($n3 != $n4){
                                      $txt2 = $n3. ' != ' .$n4;
                                      echo $txt2;
                                      $valor2 = true;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' != ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;
                              case 4:
                                  if ($n3 !== $n4){
                                      $valor2 = true;
                                      $txt2 = $n3. ' !== ' .$n4;
                                      echo $txt2;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' !== ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;
                              case 5:
                                  if ($n3 < $n4){
                                      $txt2 = $n3. ' < ' .$n4;
                                      echo $txt2;
                                      $valor2 = true;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' < ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;
                              case 6: 
                                  if ($n3 > $n4){
                                      $txt2 = $n3. ' > ' .$n4;
                                      echo $txt2;
                                      $valor2 = true;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' > ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;
                              case 7:
                                  if ($n3 <= $n4){
                                      $txt2 = $n3. ' >= ' .$n4;
                                      echo $txt2;
                                      $valor2 = true;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $txt2 = $n3. ' >= ' .$n4;
                                      echo $txt2;
                                      $valor2 = false;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;
                              case 8:
                                  if ($n3 >= $n4){
                                      $txt2 = $n3. ' >= ' .$n4;
                                      echo $txt2;
                                      $valor2 = true;
                                      echo '<h1>O resultado é verdadeiro.</h1>';
                                  }else{
                                      $valor2 = false;
                                      $txt2 = $n3. ' >= ' .$n4;
                                      echo $txt2;
                                      echo '<h1>O resultado é falso.</h1>';
                                  }
                              break;  
                          } 
  
                           $logico = $_POST['id_logico'];
                          switch($logico){
                              case 1:
                                  if($valor && $valor2){
                                      echo $txt. ' and ' .$txt2;
                                      echo '<h3>Essa expresssão é verdadeira</h3>';
                                  }
                                  else{
                                      echo $txt. ' and ' .$txt2;
                                      echo '<h3>Essa expresssão é falsa</h3>';
                                  }
                              break;
                              case 2:
                                  if($valor || $valor2){
                                      echo $txt. ' or ' .$txt2;
                                      echo '<h3>Essa expresssão é verdadeira</h3>';
                                  }
                                  else{
                                      echo $txt. ' or ' .$txt2;
                                      echo '<h3>Essa expresssão é falsa</h3>';
                                  }
                              break;
                              case 3:
                                  if($valor XOR $valor2){
                                      echo $txt. ' xor ' .$txt2;
                                      echo '<h3>Essa expresssão é verdadeira</h3>';
                                  }
                                  else{
                                      echo $txt. ' xor ' .$txt2;
                                      echo '<h3>Essa expresssão é falsa</h3>';
                                  }
                              break;
                              case 4:
                                  if(!($valor && $valor2)){
                                      echo '!' .$txt. ' and ' .$txt2. '=f';
                                      echo '<h3>A negação da expresssão é verdadeira</h3>';
                                  }
                                  else{
                                      echo '!' .$txt. ' and ' .$txt2. '= v';
                                      echo '<h3>A negação da expresssão é falsa</h3>';
                                  }
  
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