<?php

require __DIR__ ."/CAP_02_MELHORANDO_FORMULARIOS/Validacao.php";


$validacao = new Validacao();


$cpf = "85886252533";


if($validacao->validaCPF($cpf)){
    echo "<h3>CPF válido</h3>";
}else{
    echo "<h3>CPF invalido</h3>";
}









