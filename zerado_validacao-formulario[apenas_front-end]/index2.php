
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
        <input type="text" name="nome"placeholder="Digite seu nome" required>

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