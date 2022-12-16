<?php

if($_SERVER['REQUEST_METHOD']='POST'){
    if(empty($_POST['email'])){
       
        $erroemail = "Por favor,preencha o campo";
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $erroemail = "Coloque @gmail.com";
        }
        
    }
//----------------------------------------------------------

    if(empty($_POST['senha'])){
        $errosenha = "Por favor, Preencha o campo";
    }
    else{
        $senha = $_POST['senha'];
        if(strlen($senha) < 6){
            $errosenha = "Tem que 6 ou mais caracteres";
        }
    }
//----------------------------------------------------------

    
}


?>