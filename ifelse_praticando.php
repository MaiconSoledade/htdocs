<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelse praticando</title>
</head>
<body>
    <?php

    $usuario_possui_cartao_loja = true;
    $valor_compra = 99;
    $valor_frete = 50;
    $recebeu_desconto_frete = false;
    if ($usuario_possui_cartao_loja == true && $valor_compra >=400) {
       $valor_frete = 0;
       $recebeu_desconto_frete = true;
    } else if($usuario_possui_cartao_loja && $valor_compra >=300){
        $valor_frete = 10;
        $recebeu_desconto_frete = true;
    }
    else if($usuario_possui_cartao_loja && $valor_compra >=100){
        $valor_frete = 25;
        $recebeu_desconto_frete = true;
    }
    ?>
    <h1>Detalhes do pedido</h1>
    <p>Possui o cartão da loja ? <?=  $usuario_possui_cartao_loja ? 'sim' : 'nao'; ?> </p>

    <?php
   
    // if($usuario_possui_cartao_loja == true){
    //     echo 'Sim';
    // }else{
    //     echo 'Não';
    // }
    ?>

    <p>Valor da compra : <?= $valor_compra?></p>
    
    <h1>Detalhes do pedido</h1>
    <p>Recebeu desconto no frete ?</p>
    <?php
    if($recebeu_desconto_frete == true){
        echo 'Sim';
    }else{
        echo 'Não';
    }
    ?>
     <p>Valor da frete : <?= $valor_frete?></p>
</body>
</html>