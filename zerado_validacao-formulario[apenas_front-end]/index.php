<?php
$erroNome = "";
$errosenha = "";
$erroEmail = "";
$erroRepete_senha = "";
#------------------------------------------------------------------------------#
#Irá verificar se tem algum requisito do metodo POST no meu server
  if($_SERVER['REQUESTE_METHOD']="POST"){
    #Se esta vazio o meu input,se tiver vazio ele executa
    if(empty($_POST['nome'])){
      $erroNome = "Por favor,preencha com um nome";
      
    }
    #Se nao estiver vazio ele executa, atribuindo o POST['nome'] a variavel $nome com o limpador limpaPost,que vai impedir de colocar comandos na minha caixa unput
    else{
      $nome = limpaPost($_POST['nome']);
      
      #Ele so aceita letras e espaços tanto menuscula->a-z quando maiuscula->A-Z e espaços->' ;se for falso ele faz o erroNome
      if(!preg_match("/^[a-zA-Z-' ]*$/",$nome)){
        $erroNome = "Apenas aceitamos letras e espaços em branco! ";
      }
    }
#------------------------------------------------------------------------------#
     #Se esta vazio o meu input,se tiver vazio ele executa
     if(empty($_POST['email'])){
      $erroEmail= "Por favor,preencha com um Email";
      
    }else{
      #IRÁ FILTRAR MEU CAMPO EMAIL
      $email = limpaPost($_POST['email']);
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erroEmail = "Email inválido!";
      }
    }
#------------------------------------------------------------------------------#
    #VALIDAR MEU CAMPO SENHA
    if(empty($_POST['senha'])){
      $errosenha= "Por favor,preencha com uma senha";
      
    }else{
      $senha = limpaPost($_POST['senha']);
      if(strlen($senha) <6){
        $errosenha = "Senha no minimo 6 caracteres";
      }
#------------------------------------------------------------------------------#
    }
    #VALIDAR MEU CAMPO REPETE_SENHA
    if(empty($_POST['repete_senha'])){
      $erroRepete_senha = "Por favor,preencha com a mesma senha";
    }
    else{
      $repete_senha = limpaPost($_POST['repete_senha']);
      if($repete_senha !== $senha){
        $erroRepete_senha = "A senha tem que ser igual!";
      }
    }
#------------------------------------------------------------------------------
    if(($erroNome == "") && ($erroEmail == "") && ($errosenha == "") && ($erroRepete_senha == "")){
      header('Location: obrigado.php');
    }
}

#Limpador de Post contra hackeres,impede qualquer pessoa de colocar comandos no input
function limpaPost($valor){
  $valor = trim($valor);
  $valor = stripslashes($valor);
  $valor = htmlspecialchars($valor);
  return $valor;
}
?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <main>
    <h1><span>AULA PHP</span><br>Validação de Formulário</h1>

     <form method="post">
<!------------------------------------------------------------------------------>
        <!-- NOME COMPLETO -->
        <label> Nome Completo </label>
        <input type="text" name="nome"placeholder="Digite seu nome" required
        
        <?php 
        if(!empty($erroNome)){
          echo "class='invalido'";
          
        }
        if(isset($_POST['nome'])){
          echo "value='" .$_POST['nome']. "'";

        }
        ?>>

        <br><span class="erro"><?php echo $erroNome ?></span>
<!------------------------------------------------------------------------------>
        <!-- EMAIL -->
        <label> E-mail </label>
        <input type="email" name="email" placeholder="email@provedor.com" required 
        
        <?php 
        if(!empty($erroEmail)){
          echo "class='invalido'";
          
        }
        if(isset($_POST['email'])){
          echo "value='".$_POST['email']. "'";

        }?>>

      

        <br>
        <span class="erro"><?php echo $erroEmail?></span>
<!------------------------------------------------------------------------------>
        <!-- SENHA -->
        <label> Senha </label>
        <input type="password" name="senha" placeholder="Digite uma senha" required
        
        <?php 
        if(!empty($errosenha)){
          echo "class='invalido'";
        }
        if(isset($_POST['senha'])){
          echo "value='" .$_POST['senha']."'";

        }?>>
   
        <br><span class="erro"><?php echo $errosenha ?></span>
<!------------------------------------------------------------------------------>
        <!-- REPETE SENHA -->
        <label> Repete Senha </label>
        <input type="password" name="repete_senha"placeholder="Repita a senha" required
        
        <?php 
        if(!empty($erroRepete_senha)){
          echo "class='invalido'";
        }
        if(isset($_POST['repete_senha'])){
          echo "value='".$_POST['repete_senha']."'";

        }
        
        ?>>
        <br><span class="erro"><?php echo $erroRepete_senha ?></span>
<!------------------------------------------------------------------------------>
        <button type="submit"> Enviar Formulário </button>
<!------------------------------------------------------------------------------>
      </form>
    </main>
</body>
</html>