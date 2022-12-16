<?php
$errosenha = "";
$erroemail = "";

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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Central</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <main>
        <article>
            <h1 id="h1">Login</h1>
            <form action="" method="post">
                <input type="email" name="email" placeholder="E-mail" required>
                <span class="erro"><?php echo $erroemail ?></span><br>
                <input type="password" name="senha" placeholder="Senha" required>
                <span class="erro"><?php echo $errosenha ?></span><br>
                <button type="submit">Entrar</button>
            </form>
            <a href="index.html" target="_blank" rel="noopener noreferrer">Não tem Conta?</a>
        </article>
    </main>
</body>
</html>