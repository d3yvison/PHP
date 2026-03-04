<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
    $preco = $_GET['preco'] ?? 0;
    $reajuste = $_GET['reajuste'] ?? 0;      
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="preco">Preço do Produto(R$)</label>
            <input type="number" name="numero" id="preco" value="<?=$preco?>">
            <label for="reajuste">Qual será o percentual de reajuste (0%)</label>
            <input type="number" name="reajuste" id="reajuste" value="<?=$reajuste?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php
            $resultado = $preco + ($preco * ($reajuste / 100));
            $resultadoSomado = $resultado + $preco;
        print"<p>O produto que custava R\$$preco, com $reajuste% de aumento vai passar a custar R\$$resultado a partir de agora.</p>"
        ?>      
    </section>
    
</body>
</html>