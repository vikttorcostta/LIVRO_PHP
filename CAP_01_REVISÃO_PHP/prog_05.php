<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("meuNome","Victor Costa");
        define("meuPeso", 82);

        echo "O meu nome é " . meuNome;
        echo "<br>";
        echo "O meu peso é ". meuPeso . " quilos";

        var_dump(__FILE__);
        var_dump(__LINE__);
        var_dump(PHP_VERSION);
        var_dump(PHP_OS);
        var_dump(E_ERROR);
    ?>
</body>
</html>