<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

            <?php 
            $valor = $_REQUEST["valor"] ?? 0;
            $dolar = 5.37;
            $resultado = $valor / $dolar;
            echo"<p>O valor de R\$" . number_format($valor, 2, "," , ".") . " corresponde a  U\$" .  number_format($resultado, 2, "," , ".");
            echo"<p>\nCotação fixa de R\$5,37 informada diretamente no código</p>";
            ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>