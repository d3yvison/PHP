<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $salario = $_GET['salario'] ?? 0;
    $salarioMinimo = $_GET['salarioMinimo'] ?? 0;    
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário(R\$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de R$1.380,00</p>
            <input type="submit" value="Calcular">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $salarioMinimo = 1380;
            $resultado = $salario / $salarioMinimo;
            $resto = $salario % $salarioMinimo;
            print "<p>Quem recebe um salário de R\$" . number_format($salario, 2, "," , ".") . " ganha $resultado salários mínimos + R\$$resto". number_format($resto, 2, "," , ".") .".</p>";
        ?>

    </section>            
</body>
</html>