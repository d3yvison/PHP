<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $nasc = $_GET['nasc'] ?? 0;
    $ano = $_GET['ano'] ?? 0;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>">

            <label for="ano">Quer saber a sua idade em que ano? (Estamos atualmente em <?php echo date('Y'); ?>)</label>

            <input type="number" name="ano" id="ano" value="<?=$ano?>">

            <input type="submit" value="Calcular Médias">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $resultado = $ano - $nasc;
            
        print"<p>Quem nasceu em $nasc vai ter $resultado em $ano"
    ?>      
    </section>    
</body>
</html>