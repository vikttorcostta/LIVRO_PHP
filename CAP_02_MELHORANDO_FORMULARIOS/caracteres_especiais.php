<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $texto = 'https://m.media-amazon.com/images/I/81jdJ94mSbL._SL1500_.jpg';

        $novo_texto = htmlspecialchars(string:$texto[ENT_COMPAT]);
        echo $texto . '<br>';
        echo $novo_texto . '<br>' ;

        echo '<hr>';

        $email = 'paulo@gmail.com';
        $telefone = '71992312285';

        if(filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($telefone, FILTER_VALIDATE_INT)){
            echo 'Email e telefone são validos';
        }else{
            echo 'Dados invalidos';
        }
    
    ?>
    
</body>
</html>