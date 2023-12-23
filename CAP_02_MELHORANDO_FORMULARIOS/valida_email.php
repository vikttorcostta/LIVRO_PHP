<?php

/***
 * PAULO VICTOR COSTA DE MELO
 * 23/12/2023
 * 
 */



//FUNÇÃO DE VALIDAÇÃO DE EMAIL
function email_clear_validate(string $email_in){
    $clear_email = filter_var($email_in, FILTER_SANITIZE_EMAIL);
    $validate_email = filter_var($clear_email, FILTER_VALIDATE_EMAIL);

    return $validate_email !== false ? $validate_email : false;
}


//FUNÇÃO DE VALIDAÇÃO DE USUARIO
function user_validade_clear(string $user_validate)
{
    $clear_user = filter_var($user_validate, FILTER_SANITIZE_SPECIAL_CHARS);
    if(strlen($clear_user) < 8 || strlen($clear_user) > 10){
        return false;
    }else{
        return $clear_user;
    }
}


