<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio numeros aleatorios mega sena </title>
</head>
<body>
    <?php
   $numeros = array();
   while (count($numeros)<=5){
    $num = rand(1,60);
    if(!in_array($num, $numeros)){
        $numeros[] =$num;
    }
   }

   print_r($numeros);
    ?>


</body>

</html>