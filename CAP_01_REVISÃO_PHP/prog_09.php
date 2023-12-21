<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 09</title>
</head>
<body>
    <?php

        class Teste
        {
            private $nome;
            private $sobre_nome;

            public function __construct(string $nome, string $sobre_nome) {
                $this->nome = $nome;
                $this->sobre_nome = $sobre_nome;
            }

            public function getNome(){
                return $this->nome;
            }

            public function getSobreNome(){
                return $this->sobre_nome;
            }

            public function setNome($nome): string
            {
                $this->nome = $nome;
            }

            public function setSobreNome($sobre_nome): string
            {
                $this->sobre_nome = $sobre_nome;
            }
        }


        $meuNome = 'paulo';
        $meuSobreNome = 'costa';

        $variavel_objeto = new Teste($meuNome, $meuSobreNome);

        
       
    ?>
    
</body>
</html>