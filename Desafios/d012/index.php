<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $valor = $_GET['valor'] ?? 1;
      
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual é o total de segundos?</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Calculando...</h2>
        <?php
            $semanas;
            $dias;
            $horas;
            $minutos;
            $segundos;            
        print"<p>Analisando o valor que você digitou $segundos segundos equivalem a um total de::</p>
        <ul>
        <li>$semanas semanas</li>
        <li>$dias dias</li>
        <li>$horas horas</li>
        <li>$minutos minutos</li>
        <li>$segundos segundos</li>
        </ul>"
        ?>      
    </section>            
</body>
</html>