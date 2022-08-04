<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function exibirBoasVindas(){
            echo ' bem vindo <br/>';
    }
    exibirBoasVindas();

    function calcularAreaTerreno($largura, $comprimento){
        $area = $largura * $comprimento;
        return $area;
    }
    $resultado = calcularAreaTerreno(10, 30);
    echo $resultado;
    ?>
</body>
</html>