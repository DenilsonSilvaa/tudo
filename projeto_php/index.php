<?php
$vazio = "";
$reprovado = "";
$aprovado = "";

if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $media = number_format(($nota1 + $nota2 + $nota3) / 3,2);
    
    $sub = 7 - $media;   
    
}
if(empty($_POST['nota1']) && empty($_POST['nota2'])){
    $vazio = "";
}
elseif($media >=7){
    $aprovado = "Sua média é: $media <br>APROVADO!!";
}
else{
    $reprovado = "Sua média é: $media <br>REPROVADO";
}




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Cálculo Média</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->

</head>
<body>
    <main>
        <article>    
            <form action="index.php" method="post">
                <input type="number" step="any" name="nota1" placeholder="Nota1" required><br>
                <input type="number" step="any" name="nota2" placeholder="Nota2" required><br>
                <input type="number" step="any" name="nota3" placeholder="Nota3" required><br>
                <button type="submit">Calcular</button>

                
            </form>
        </article>
            <div class="direita">
                <span>
                    <h1>Média</h1>
                </span>
                <h4><?php echo $vazio.$reprovado.$aprovado;?></h5>
            </div>
        
    </main>
</body>
</html>



