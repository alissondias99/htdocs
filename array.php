<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Array. aula 341 346 -->
    <?php
    // Tipos de arrays:
        //array sequencial (númerio);
          $listaFrutas = array('banana', 'maça', 'Morango', 'uva',);
          $listaFrutas[] = 'laranja';
          echo '<pre>'; //tag pre exibi o array formatado
            var_dump($listaFrutas);
          echo '</pre>';
          echo "<br>";
          echo '<pre>';
            print_r($listaFrutas);
          echo '</pre>';

          
        // array associativo (itens com indices explicitos);
            $listaFrutas2 = array(
                'a' => 'banana',
                'b' => 'maca',
                'c' => 'morango',
                12 =>'uva');

        echo '<pre>'; 
          var_dump($listaFrutas2);
        echo '</pre>';
        echo "<br>";
        $listaFrutas2['w'] = 'laranja';
        echo $listaFrutas2[12];
        echo "<br>";
        echo $listaFrutas2['w'];
        echo "<br>";

        //arrays multidimensionais (arrays dentro de arrays)

        $listaCoisas['frutas'] = array(1=> 'banana', 2=> 'maca', 3=> 'morango');
        $listaCoisas['pessoas'] = ['Marcia', 'Antonio', 'Henri'];
        echo '<pre>'; 
            print_r($listaCoisas);
        echo '</pre>';
        echo $listaCoisas['frutas'][2];
        echo "<br>";
        echo $listaCoisas['pessoas'][1];

        // pesquisa em arrays
        $listaFrutas3 = array('banana', 'maça', 'Morango', 'uva',);
        echo '<pre>'; 
          var_dump($listaFrutas3);
        echo '</pre>';
        $exite = in_array('Banana', $listaFrutas3); //in_array retorna true ou false depensdendo se o valor existe ou não
        if ($exite){
          echo 'O valor existe';
        } else{
          echo 'O valor não existe';
        }

        echo "<br>";
        echo array_search('maça', $listaFrutas3); //array_search retorna o indice do valor caso ele exista

        echo "<br>";
        //funções de arrays

        $array = [1 =>'Notebook', 32=>'Mouse', 7=>'Teclado'];  
        if(is_array($array)){
          echo 'É um array';
        } else{
          echo 'Não é um array';
        }

        echo "<br>";

        echo '<pre>'; 
          print_r($array);
        echo '</pre>';
        echo '<br>';
        echo '<pre>'; 
          print_r(array_keys($array));//retorna as chaves inves dos valores
        echo '</pre>';

        echo "<br>";

        sort($array);//retorna true ou false dependendo se o array foi ou não ordenado
        //asort faz a mesma coisa porem asort reorganiza os indices também
        echo '<pre>'; 
         print_r($array);
        echo '</pre>';

        echo "<br>";
        echo count($array);//conta quantos itens tem no array

        $novo_array = array_merge($array, $listaFrutas); //junto dois ou mais arrays
        echo '<pre>'; 
         print_r($novo_array);
        echo '</pre>';
    ?>
</body>
</html>