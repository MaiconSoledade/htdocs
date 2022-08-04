<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis php</title>
</head>
<body>
    <?php
    //string
    $nome = 'Maicon';
    //int
    $idade = 25;
    //float
    $peso = 70.1;

    //boolean
    $fumante_sn = false;
    ?>
    <h1>
        ficha de cadastro
    </h1> <br>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante: <?= $fumante_sn ?> </p>
</body>
</html>