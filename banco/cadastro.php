<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro Banco do Brasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <article>
                <h1>Cadastr</h1>
            <form action="recebe.php" method="post">
                <input type="number" name="cpf" placeholder="CPF" required><br>
                <input type="text" name="nome" placeholder="Nome" required><br>
                <input type="email"  name="email" placeholder="E-mail" required><br>
                <input type="password" name="senha" placeholder="Senha" required><br>
                <input type="tel" name="telefone" placeholder="Telefone" required><br>
                <button type="submit">Cadastrar</button>
            </form>
                <a href="" id="linkLogin">Ja possui uma conta?</a>
        </article>
    </main>
</body>
</html>