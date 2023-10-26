<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Aula 318 a 324. If/else-->

    <?php
        //== mesmo valor?
        //=== mesmo valor e mesmo tipo?
        // != ou <> diferente?
        //!== valor e tipo diferente?
        // < menor que, e > maior
        // <= menos ou igual a, e a>= maior ou igual

       /* $n1 = 5;
        $n2 = 6;

        if ($n1 <= $n2){
            echo'Verdadeiro';
        } else {
            echo 'Falso';
        }*/
    ?>

    <!--Aula 321. Operadoes lógicos-->
    <?php
    // AND or && operador E
    // OR ou || operador OU
    //XOR Retorna verdadeiro se apenas umas das condições for verdadeir
    // ! Inverte o resultado da condição (Se der falso retornará verdadeiro)?>

    <?php
        /*if (!(17 > 20)){
            echo 'true';
        } else {
            echo 'False';
        }*/ ?>

    <?php
        $usuario_possui_cartao_loja = false;
        $valor_compra = 300;
        $valor_frete = 50;
        $desconto_frete = false;

        if($usuario_possui_cartao_loja == true){
            $valor_frete = 0;
            $desconto_frete = true;
        }
    ?>
    <h1>Detalhes do pedido</h1>

    <p>Cliente possui o cartão da loja?</p>

    <?php
        if ($usuario_possui_cartao_loja == true){
            echo 'Sim';
        } else {
            echo 'Não';
        }
        echo "<p>O valor final da compra deu R$$valor_compra e frete será de R$$valor_frete </p>"
    ?>

    <!--Aula 325. Operador ternario-->

    <?php
        $teste = 2+2 == 4 ? 'Sim' : 'Não';
        echo $teste;
    ?>

    <!--Aula 326. Atividade-->

    <?php 
        $peso = 70;
        $idade = 60;

        if($peso >= 50 && ($idade >= 16 && $idade <=69)){
            echo '<br>Essa pessoa preenche os requisitos';
        } else {
            echo '<br>Essa pessoa não preenche os requisitos';
        }
    ?>

    <!--Aula 327. Operador Switch-->
    <p>↓Aula de Switch↓</p>
    <?php
        switch(2+2){
            case 2:
                echo '<br>Resultado é 2';
                break;
            
            case 4:
                echo '<br>Resultado é 4';
                break;
        }
    ?>

   <!--Aula 328. Casting de tipo (ransformar um tipo de variável em outro tipo, um valor inteiro vira um valor booleano, por exemplo)-->
   <br>
   <?php
        $valor = 10;
        $valor2 = (boolean) $valor;
        
        echo gettype($valor2); //gettype retorna o tipo do valor entre parênteses 
   ?>

       <!--Aula 330 e 331. Operadores aritméticos-->
       <?php
            // +, -, /, % e * 
            //As regras de uso são as mesmas das outras linguagens
        ?>



</body>
</html>