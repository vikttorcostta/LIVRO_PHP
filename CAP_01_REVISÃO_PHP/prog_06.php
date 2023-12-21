<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 06</title>
</head>
<body>
    <?php

        $numero = 500;
        function teste_escopo(){
            
            global $numero;
            $numero += 5;
            echo $numero . "<br>";
            
        }
        echo $numero . '<br>';
        teste_escopo();
    ?>
    
</body>
</html>