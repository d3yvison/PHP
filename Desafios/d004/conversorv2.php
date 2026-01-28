<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Conversor de Moedas v2.0</h1>
            <?php 
            //Cotação API Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $dolar = $dados["value"][0]["cotacaoCompra"];

            $valor = $_REQUEST["valor"] ?? 0;
            $resultado = $valor / $dolar;
            echo"<h2>O valor de <strong>R\$" . number_format($valor, 2, ",",".") . " </strong>corresponde a <strong>U\$" . number_format($resultado, 2, ",",".");
            echo"</strong></h2><h3><br>*Cotação atualizada retirada diretamente do Banco Central: <strong></h3>" . number_format($dolar, 2,",",".");
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>