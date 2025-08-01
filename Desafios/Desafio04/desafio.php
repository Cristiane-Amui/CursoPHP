<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas Avançado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de moedas Avançado</h1>
        <?php 
            // Cotação vinda da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

           
            
            $cotacao = $dados['value'][0]['cotacaoCompra'];


            $reais = (int) $_GET['reais'] ?? 0;

            $dollar = $reais / $cotacao;
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dollar, "USD");

            echo "<br>Cotação atual de " . numfmt_format_currency($padrao, $cotacao, "BRL");

        ?>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </section>
</body>
</html>