<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 14</title>
</head>
<body>

    <?php
        //DO WHILE TESTA A CONDIÇÃO DEPOIS
        $numero = 1;
        do{
            echo "<h3>O contador atual é {$numero}</h3>";
            $numero++;
        }while($numero < 100);
    ?>
    
</body>
</html>