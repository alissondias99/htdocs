<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Variavel string
        $nome = 'Alisson';

        $idade = 20;

        $peso = 105.30;

        $fumante = false;
        //É obrigatório terminar as declarações de variaveis com ponto e vírgula (;).
     ?>

     <p>Meu nome é <?= $nome ?></p>
     <p>Minha idade é <?= $idade ?></p>
     <p>Meu peso é <?= $peso ?></p>
     <p>Sou fumante? <?= $fumante ?></p>

     <?php echo "Meu nome é $nome tenho $idade anos, atualmente tenho peso mais ou menos $peso kg <br>" //Aspas duplas facilitam a digitação mas também pesam mais no projeto?>
     <?php echo 'Meu nome é ' .$nome. ' tenho ' .$idade. 'anos, atualmente tenho peso mais ou menos  ' .$peso. 'kg<br>' ?>

     <?php //Variaveis constantes
     define ('nome', 'Alisson');
     echo nome ?>
</body>
</html>