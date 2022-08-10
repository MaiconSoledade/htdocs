<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <?php
    $parametro = 4;
    switch ($parametro){
            case 1:
                echo'teste 1';
                break;
            case 2:
                echo'teste 2';
                break;
            case 3:
                echo'teste 3';
                break;
            default:
            echo 'nao compativel, entou no default.';
                break;
    }
    ?>
</body>
</html>