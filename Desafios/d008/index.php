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
    $numero = $_GET['numero'] ?? 1;
      
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número(R$)</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular as Raízes">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $raizQuadrada = sqrt($numero);
            $raizCubica = $numero ** (1/3);
            
        print"<p>Analisando o número $numero, temos:</p>
        <ul>
        <li>A sua raíz quadrada é $raizQuadrada</li>
        <li>A sua raíz cúbica é $raizCubica</li>
        </ul>"
        ?>      
    </section>            
</body>
</html>