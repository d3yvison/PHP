<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;    
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Divisão</h2>
        <?php
            $divisao = $dividendo / $divisor;
            $resto = $divisao * $divisor - $dividendo;
            print "<p>A divisão entre os valores $dividendo pelo divisor $divisor é igual a $divisao e o resto é $resto.</p>";
        ?>

    </section>            
</body>
</html>