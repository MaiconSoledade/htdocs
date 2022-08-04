<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doar sangue</title>
</head>
<body>
    <p>Crie uma aplicação capaz de identicar se uma determinada pessoa pode ou nao doar sangue, utilize as varieies idade e peso. <br/> </p>
    <p>se a idade informado estiver entre 16 e 69 e o peso for igual ou superior a 50kg então deve imprimir "atende os requisitos" caso contrario " nao atende os requisitos".</p>
    <?php
    $idade =69;
    $peso =50;
      if(($idade >=16 && $idade <=69) && $peso >=50){
        echo '<b> Atende os requisitos </b> ';
    }else{
        echo '<b> Não atende os requisitos </b>';
    }
    ?>

</body>
</html>