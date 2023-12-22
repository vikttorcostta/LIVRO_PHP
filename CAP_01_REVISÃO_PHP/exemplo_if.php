<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo if</title>
</head>
<body>
    <?php

        $portugues = 8;
        $matematica = 6;
        $geografia = 5;
        $historia = 10;

        $media = ($portugues + $matematica + $geografia + $historia) / 4;

        if($media >= 7){
            echo "<h3>Aprovado, parabens!</h3>";
        }else{
            echo "<h3>Reprovado</h3>";
        }
    ?>
    
</body>
</html>