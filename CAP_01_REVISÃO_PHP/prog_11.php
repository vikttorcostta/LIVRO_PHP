<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 11</title>
</head>
<body>

    <?php

        $soma = 1;
        $valor1 = 10;
        $valor2 = 20;
        $valor3 = 30;

        $soma += $valor1; //soma fica com 100 == 10
        $soma += $valor2; //soma fica com 30 == 10+20
        $soma *= $valor3; //soma fica com 900 == 30*30
        $soma %= 100; //soma fica com 0 == 900%100

        echo $soma;

        if ($soma == true and $soma == false){
            print("verdadeiro");
        }else{
            print("false");
        }
    ?>
</body> 
</html>