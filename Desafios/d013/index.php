<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get"></form>
        <label for="valor">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="valor" id="valor" value="<?=$valor?>">
        <p>*Notas disponíveis: R$100, R$50, RS10, R$5</p>
        <input type="submit" value="Sacar">
    </main>

    <section>
        <h2>Saque de $valor realizado</h2>
        <?php
            
            
        print"<p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
        <li>100 </li>
        <li>50</li>
        <li>10 </li>
        <li>5</li>
        </ul>"
        ?>      
    </section>
</body>
</html>