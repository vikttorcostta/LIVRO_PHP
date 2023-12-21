<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 08</title>
</head>
<body>
    <?php

        $vetor[0] = 30;
        $vetor[1] = 40;
        $vetor[2] = 50;
        $vetor[3] = 60;
        $vetor[15] = 70;

        var_dump($vetor);

        $timeFutebol["Time"] = "Botafogo";
        $titulos["Titulos"] = "Bi-Campeão Brasileiro";
        $ano["ano"] = 1995;

        var_dump($ano, $timeFutebol, $titulos);

        $dados = [
            'timeFutebol' =>'Botafogo',
            'titulos' => 'Bi-Campeão Brasileiro',
            'ano' => 1995
        ];

        var_dump($dados);

        $vetor = array(10,50,100,250,300);
        echo $vetor[2] . '<br>';
        $vet  = array (1,2,3, 'nome' => 'Paulo');

        echo $vet[0] . '<br>';
        echo $vet['nome'];



    ?>
</body>
</html>