<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Aulas 335 a 340. Funções em PHP-->
    <h1>Funções em PHP</h1>
    <?php 
        function exibirMensagem(){
            echo 'Essa é uma função em PHP<br>';
        }
        exibirMensagem();

        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        echo  calcularAreaTerreno(30, 50);
    ?>

    <br>

    <!--Atividade da aula 337-->
    <?php 
        function calcularImposto($salario, $imposto){
            if ($salario >= 1903.98 && $salario < 2826.65) {
                $imposto = 7.5;
            } else if ($salario >= 2826.65 && $salario < 3751.05) {
                $imposto = 15;
            } else if ($salario >= 3751.05 && $salario < 4664.68) {
                $imposto = 22.5;
            } else if($salario >= 4664.68) {
                $imposto = 27.5;
            } else {
                return 'Você não tem que pagar imposto';
            }
            $calculo = ($salario * $imposto)/100;
            return "Você tem que pagar $imposto% de imposto totalizando R$$calculo";
        }
        echo calcularImposto(2826.65,0);
        ?>

        <br>
        <!--Funções nativas-->
        <?php 
        //string
             $texto = 'Esse é um curso de PHP';
             echo $texto. '<br>';
             echo strtolower($texto). '<br>';
             echo strtoupper($texto). '<br>';
             echo ucwords($texto). '<br>';
             echo strlen($texto). '<br>';
             echo str_replace('um curso', 'uma aula', $texto). '<br>';

        //matemática
            $num = 7.7;
            echo $num. '<br>';
            echo floor($num). '<br>';
            echo ceil($num). '<br>';
            echo round($num). '<br>';
            echo rand(1,3). '<br>'; //gera um número aleatório

        // datas
            echo date('d/m/Y H:i'). '<br>';
            //date_default_timezone_set('America/Denver'). '<br>';
            echo date('d/m/Y H:i'). '<br>';

            $dataInicio = '2018-04-24';
            $dataFinal = '2018-05-15';

            $timeInicio = strtotime($dataInicio);
            $timeFinal = strtotime($dataFinal);

            echo "$dataInicio = $timeInicio <br>";
            echo "$dataFinal = $timeFinal <br>";

            $diferenca_times = $timeFinal - $timeInicio;
            echo $diferenca_times. '<br>';
            $segundos_p_dia = 24 * 60 * 60;
            $diferenca_dias = $diferenca_times / $segundos_p_dia;
            echo "A diferença entre as duas datas é de $diferenca_dias dias";
        ?>
</body>
</html>