<?php

function validarCPF($cpf) {
    // Remover caracteres não numéricos
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verificar se o CPF possui 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verificar se todos os dígitos são iguais, o que tornaria o CPF inválido
    if (preg_match('/^(\d)\1*$/', $cpf)) {
        return false;
    }

    // Aplicar o algoritmo de validação do CPF
    for ($i = 9, $j = 0, $soma1 = 0, $soma2 = 0; $i > 0; $i--, $j++) {
        $soma1 += $cpf[$j] * $i;
        $soma2 += $cpf[$j] * ($i + 1);
    }

    $digito1 = ($soma1 % 11) % 10;
    $digito2 = ($soma2 % 11) % 10;

    // Verificar se os dígitos calculados são iguais aos dígitos informados
    if ($digito1 == $cpf[9] && $digito2 == $cpf[10]) {
        return true;
    } else {
        return false;
    }
}

// Exemplo de uso
$cpf = "123.456.789-09";

if (validarCPF($cpf)) {
    echo "CPF válido";
} else {
    echo "CPF inválido";
}

?>
