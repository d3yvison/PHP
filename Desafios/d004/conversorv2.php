<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
</head>
<body>
     <header>
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <main>
        <?php 
        $valor = $_GET["valor"];
        $dolar = 5.37;
        $resultado = $valor / $dolar;
        echo"<p>O valor de <strong>R$$valor</strong> corresponde a  <strong>U$$resultado</strong>!
        <footer> Cotação fixa de R$5,37 informada diretamente no código</footer>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>