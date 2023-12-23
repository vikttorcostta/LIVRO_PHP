<?php

/***
 * PAULO VICTOR COSTA DE MELO
 * 
 */

//FUNÇÃO DE VALIDAÇÃO DE EMAIL

function limpa_email(string $email_entrada){

   $caracteres_invalidos = [" ", "/", ",", ".@", "@.", ";"]; //listagem de caracateres passiveis a erros de digitação
   $caracteres_validos = ["", "", ".", "@", "@", "."]; //fazendo a substituição pelos caracteres corretos
    
   $email_saida = str_replace($caracteres_invalidos, $caracteres_validos, $email_entrada);//substituição dos caracteres errados

   $email_saida = filter_var($email_saida, FILTER_SANITIZE_EMAIL);//limpeza geral de email

   return filter_var($email_saida, FILTER_VALIDATE_EMAIL);// retorna se o email é válido ou não

}




