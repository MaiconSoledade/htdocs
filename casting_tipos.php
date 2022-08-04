<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting php</title>
</head>
<body>
    <?php
    //gettype() => retorna o tipo de variavel
    $valor = 10;
    $valor2 = (double) $valor; //double ou float 
    echo gettype($valor);
    echo '<br/>';
    echo gettype($valor2);
    ?>
</body>
</html>