<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Laços. aulas 347 a 353 -->
    <?php 
    // Exemplo de while
    $num = 0;
        while($num <= 10) {
            //echo $num . "<br>";
            $num++;
            if($num%2 == 1) {
                continue;
            }
            
            echo $num . "<br>";
            
        }
        echo 'Fim! <br>';
    ?>

    <?php 
        // Exemplo de DO while
        $num = 0;
            do{
                $num++;
                if($num%2 == 0) {
                    continue; 
                }
                echo $num . "<br>";
            }while($num <= 10);

            echo 'Fim! <br>';
    ?>

    <?php 
        // Exemplo de FOR
        for ($x = 10; $x <= 20; $x++){
           
            echo $x . "<br>";
        }
        
    ?>

    <?php 
        // Percorrendo um array com laços
        $registros = array(
            array('Titulo' => 'Noticas 1', 'Conteudo' => 'Conteudo 1'),
            array('Titulo' => 'Noticas 2', 'Conteudo' => 'Conteudo 2'),
            array('Titulo' => 'Noticas 3', 'Conteudo' => 'Conteudo 3'));
        $idx = 0;
        /*while($idx < 3){
            echo '<h3>'. $registros[$idx]['Titulo'] . '</h3>';
            echo '<p>'. $registros[$idx]['Conteudo'] . '</p>';
            echo '<br>';
            $idx++;
        }*/

        /*do {
            echo '<h3>'. $registros[$idx]['Titulo'] . '</h3>';
            echo '<p>'. $registros[$idx]['Conteudo'] . '</p>';
            echo '<br>';
            $idx++;
        } while ($idx <3);*/

        for($idx = 0; $idx < 3; $idx++){
            echo '<h3>'. $registros[$idx]['Titulo'] . '</h3>';
            echo '<p>'. $registros[$idx]['Conteudo'] . '</p>';
            echo '<br>';
        }
    ?>

    <?php 
        // Exemplo de foreach (especializado em arrays e objetos)
        $moveis = ['Geladeira', 'Fogão', 'Microondas', 'Sofá'];

        echo '<pre>';
        print_r($moveis);
        echo '<pre>';

        foreach($moveis as $movel){
            echo $movel . '<br>';
        }

        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2000, 'Sexualidade' => 'M'),
            array('nome' => 'Maria', 'salario' => 3000),
            array('nome' => 'Pedro', 'salario' => 4000),
            array('nome' => 'Ana', 'salario' => 5000),
        );
        echo '<pre>';
        print_r($funcionarios);
        echo '<pre>';

        foreach($funcionarios as $idx => $funcionario){
            foreach($funcionario as $idx2 => $salario ){
                echo "$idx2 - $salario <br>";
            }
            echo '<hr>';
        }
    ?>

    <?php 
        // Atividade

        define("INFERIOR",1);
        define("SUPERIOR",60);
        $num = 0;
        echo "Os números sorteados foram:";
        while ($num <6){
            $numero = rand(INFERIOR, SUPERIOR);
            $num++;
            echo $numero. ' ';
        }
        
    
    ?>
</body>
</html>