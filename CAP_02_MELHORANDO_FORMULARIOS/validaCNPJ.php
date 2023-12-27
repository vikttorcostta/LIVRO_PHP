<?php

function validarCNPJ($cnpj) {
    // Remover caracteres não numéricos
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

    // Verificar se o CNPJ possui 14 dígitos
    if (strlen($cnpj) != 14) {
        return false;
    }

    // Verificar se todos os dígitos são iguais, o que tornaria o CNPJ inválido
    if (preg_match('/^(\d)\1*$/', $cnpj)) {
        return false;
    }

    // Aplicar o algoritmo de validação do CNPJ
    $soma = 0;
    $multiplicador = 5;

    for ($i = 0; $i < 12; $i++) {
        $soma += $cnpj[$i] * $multiplicador;

        $multiplicador = ($multiplicador == 2) ? 9 : ($multiplicador - 1);
    }

    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : (11 - $resto);

    // Verificar o segundo dígito
    $soma = 0;
    $multiplicador = 6;

    for ($i = 0; $i < 13; $i++) {
        $soma += $cnpj[$i] * $multiplicador;

        $multiplicador = ($multiplicador == 2) ? 9 : ($multiplicador - 1);
    }

    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : (11 - $resto);

    // Verificar se os dígitos calculados são iguais aos dígitos informados
    if ($digito1 == $cnpj[12] && $digito2 == $cnpj[13]) {
        return true;
    } else {
        return false;
    }
}

// Exemplo de uso
$cnpj = "12.345.678/0001-09";

if (validarCNPJ($cnpj)) {
    echo "CNPJ válido";
} else {
    echo "CNPJ inválido";
}

?>
