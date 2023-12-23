<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 16</title>
</head>
<body>
    <?php

        $vetor = [1,2,3,4,5,6,7,8,9,10];
        foreach($vetor as $v){
            print"<h3>O valor atual é $v </h3><br> ";
        }

        $vetor = ["um" => 1, "dois" => 2, "tres" => 3, "quatro" =>4, "cinco" =>5];
        foreach($vetor as $chave => $valor){
            print"O valor atual é [$chave] => $valor <br> ";
          
        }
       
    ?>
    
</body>
</html>