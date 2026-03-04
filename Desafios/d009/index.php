<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $num1 = $_GET['num1'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 1;
    $num2 = $_GET['num2'] ?? 0;
    $peso2 = $_GET['peso2'] ?? 1;  
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">1° Valor</label>
            <input type="number" name="num1" id="num1" value="<?=$num1?>">

            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" min="1" value="<?=$peso1?>">    

            <label for="num2">2° Valor</label>
            <input type="number" name="num2" id="num2" value="<?=$num2?>">

            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" min="1" value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
            $mediaSimples = ($num1 + $num2) / 2 ;
            $mediaPonderada = (($num1 * $peso1) + ($num2 * $peso2)) / ($peso1 + $peso2);
            
        echo "<p>Analisando os valores $num1 e $num2:" ;
        echo "<ul><li><strong>A Média Aritmética Simples</strong> é: " . number_format($mediaSimples, 2, "," , ".") . "</li>";
        echo"<li><strong>A Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é: " . number_format($mediaPonderada, 2, ",",".") . "</li></ul>";
        ?>      
    </section>    
</body>
</html>