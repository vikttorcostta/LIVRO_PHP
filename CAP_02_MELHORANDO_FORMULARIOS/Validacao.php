<?php

class Validacao
{

    private $validaEmail;
    private $validaUsuario;
    private $validaCPF;
    private $validaCNPJ;

    public function __construct()
    {
        //$this->validaCPF = $validaCPF;

        
    }

    //GETTERS
    
    /**
     * getValidaEmail
     *
     * @return void
     */
    public function getValidaEmail()
    {
        return $this->validaEmail;
    }
    
    /**
     * getValidaUsuario
     *
     * @return void
     */
    public function getValidaUsuario()
    {
        return $this->validaUsuario;
    }
    
    /**
     * getValidaCPF
     *
     * @return void
     */
    public function getValidaCPF()
    {
        return $this->validaCPF;
    }
    
    /**
     * getValidaCNPJ
     *
     * @return void
     */
    public function getValidaCNPJ()
    {
        return $this->validaCNPJ;
    }


    //SETTERS 
       
    /**
     * setValidaEmail
     *
     * @param  mixed $validaEmail
     * @return void
     */
    public function setValidaEmail( $validaEmail)
    {
        $this->validaEmail = $validaEmail;
    }
    
    /**
     * setValidaUsuario
     *
     * @param  mixed $validaUsuario
     * @return void
     */
    public function setValidaUsuario($validaUsuario)
    {
        $this->validaUsuario = $validaUsuario;
    }
    
    /**
     * setValidaCPF
     *
     * @param  mixed $validaCPF
     * @return void
     */
    public function setValidaCPF($validaCPF)
    {
        $this->validaCPF = $validaCPF;
    }
    
    /**
     * setValidaCNPJ
     *
     * @param  mixed $validaCNPJ
     * @return void
     */
    public function setValidaCNPJ($validaCNPJ)
    {
        $this->validaCNPJ = $validaCNPJ;
    }


    
    /**
     * validaEmail
     *
     * @param  mixed $email
     * @return string
     */
    public function validaEmail(string $email): string
    {
        $limpaEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $validaEmail = filter_var($limpaEmail, FILTER_VALIDATE_EMAIL);

        return $validaEmail !== false ? $validaEmail : false;
    }
    
    /**
     * validaUsuario
     *
     * @param  mixed $usuario
     * @return string
     */
    public function validaUsuario(string $usuario): string
    {   
        //Limpeza de caracteres
        $limpaUsuario = filter_var($usuario, FILTER_SANITIZE_SPECIAL_CHARS);
        if (strlen($limpaUsuario) < 8 || strlen($limpaUsuario) > 10) {
            return false;
        } else {
            return $limpaUsuario;
        }
    }
    
    /**
     * validaSenha
     *
     * @param  mixed $senha
     * @return void
     */
    public function validaSenha(string $senha): string
    {   
        //Limpeza de caracteres
        $limpaSenha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/", $limpaSenha)){
            return false;
        }elseif(strlen($limpaSenha) < 8 || strlen($limpaSenha) > 15){
            return false;
        }else{
            return true;
        }
    }



    /**
     * validaCPF
     *
     * @param  mixed $cpf
     * @return string
     */
    public function validaCPF(string $cpf): string
    {
       // Extrai somente os números
       $cpf = preg_replace('/[^0-9]/is', '', $cpf);

       // Verifica se foi informado todos os digitos corretamente
       if (strlen($cpf) != 11) {
           return false;
       }

       // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
       if (preg_match('/(\d)\1{10}/', $cpf)) {
           return false;
       }

       // Faz o calculo para validar o CPF
       for ($t = 9; $t < 11; $t++) {
           for ($d = 0, $c = 0; $c < $t; $c++) {
               $d += $cpf[$c] * (($t + 1) - $c);
           }

           $d = ((10 * $d) % 11) % 10;

           if ($cpf[$c] != $d) {
               return false;
           }
       }

       return true;
    }
    
    /**
     * validaCNPJ
     *
     * @param  mixed $cnpj
     * @return string
     */
    public function validaCNPJ(string $cnpj): string
    {
        // Remove caracteres especiais
        $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

        // Verifica se o número de dígitos informados é igual a 14
        if (strlen($cnpj) != 14) {
            return false;
        }

        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            return false;
        }

        $b = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

        // Faz o cálculo validador do CNPJ
        for ($i = 0, $n = 0; $i < 12; $n += $cnpj[$i] * $b[++$i]);

        if ($cnpj[12] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
            return false;
        }

        for ($i = 0, $n = 0; $i <= 12; $n += $cnpj[$i] * $b[$i++]);

        if ($cnpj[13] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
            return false;
        }

        return true;
    }
}
