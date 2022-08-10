<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Crie uma função para calcular o imposto de  renda de acordo com o salario, passando por parametro os valores de salario</p>
    <ul>
        <li> até 1903.98 isento <br/> </li>
        <li>De 1903.99 até 2826.65 7.5% <br/></li>
        <li>De 2826.66 até 3751.05 15% <br/></li>
        <li>De 3751.06 até 4664.68 22.5% <br/></li>
        <li>Acima de  4664.68 27.5% <br/></li>
    </ul>
    <?php
       function calcularRPF($salario){
        $imposto =0;
        if($salario <=1903.98){
            $imposto =0;
        } elseif($salario >=1903.99 && $salario <=2826.65){
            $imposto = ($salario * 7.5)/ 100;
            
        }elseif($salario >=2826.66 && $salario <=3751.05){
            $imposto = ($salario * 15)/ 100;
        }
        elseif($salario >=3751.06 && $salario <4664.68){
            $imposto = ($salario * 22.5)/ 100;
        }
        else{
            $imposto = ($salario * 27.5)/ 100;
        }
        return $imposto;
        
    }
    echo calcularRPF(1000);
    ?>
</body>
</html>