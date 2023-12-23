<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Formulario 02</title>
</head>
<body> 
    <form action="processa_dados.php" method="post">
           <div>
                <h3>O que você achou do atendimento?</h3>

                <input type="radio" name="avalicao" value="muito_bom" require>Exelente
                <input type="radio" name="avalicao" value="muito_bom" require>Muito bom
                <input type="radio" name="avaliacao" value="bom">Bom
                <input type="radio" name="avaliacao" value="precisa_melhorar">Precisa melhorar
                <input type="radio" name="avaliacao" value="deixou_a_desejar">Deixou a desejar
                <input type="radio" name="avaliacao" value="muito_ruim">Muito ruim

            </div>
            <div>
                <h3>Qual o nome do técnico que lhe deu suporte?</h3>

                <select name="nome_do_tecnico" id="tecnico" size="">
                   <option value="victor_costa">Victor Costa</option>
                   <option value="paulo_victor">Paulo Victor</option>
                   <option value="jhonata">Jhonata</option>
                   <option value="igor">Igor</option>
                   <option value="alan">Alan</option>
                   <option value="iago">Iago</option>
                </select>

            </div>

            <div>
                <h3>Sujestões ou comentários</h3>
                <textarea name="comentarios" id="comentario" cols="33" rows="5">Area de texto</textarea>
            </div>
            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar formulário">
            </div>

            <?php

                $string = '<p>"teste@teste"</p>';
                $teste = '<script>alert</script>';

                $novo_texto = htmlspecialchars(string:$texto[ENT_QUOTES]);

                $resultado = htmlspecialchars(string:$string[ENT_NOQUOTES]);

                echo $resultado;
            ?>
    </form>
    
</body>
</html>