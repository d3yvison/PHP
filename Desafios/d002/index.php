<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Número Aleatório</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
     <main>
        <h1>Gerando um número aleatório entre 1 e 100...</h1>
        <?php 
        $numero = mt_rand(1,100);
        echo"<p>O número gerado foi: <strong>$numero</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
        
    </main>
</body>
</html>