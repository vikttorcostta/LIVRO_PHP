<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Switch</title>
</head>
<body>
    <?php

        $variavel = "s";

        switch($variavel){
            
            case "s" || "S":
                echo "<h3>Voce escolheu SIM</h3>";
            case "n" || "N":
                echo "<h3>Voce escolheu NÃO</h3>";
            default:
                echo "<h3>Informe uma opção válida</h3>";
                break;
        }
    ?>
</body>
</html>