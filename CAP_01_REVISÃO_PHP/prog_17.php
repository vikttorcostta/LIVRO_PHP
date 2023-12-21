<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "test";

$conexao = new mysqli($servidor, $usuario, $senha, $bd);

$resultado = $conexao->query("SELECT titulo, autor, paginas, preco FROM livros");
$numeroLinhas = $resultado->num_rows;

for ($contador = 0; $contador < $numeroLinhas;$contador++){

    $dados = $resultado->fetch_row();
    $titulo = $dados[0];
    $autor = $dados[1];
    $paginas = $dados[2];
    $preco = $dados[3];

    echo "{$titulo} | {$autor} | {$paginas} | {$preco}<br>";
}

$conexao->close();
