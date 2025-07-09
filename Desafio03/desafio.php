<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
            $reais = $_GET["reais"] ?? 0;
            $dollar = ($reais / 5.17);

            // echo "Seus R$ " . number_format($reais, 2, ",", ".") . " equivalem a <strong>US$ " . number_format($dollar, 2, ",", ".") . "</strong><br>"; //maneira tradicional

            //Formatação de moedas com interncionalização

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dollar, "USD");

            echo "<br><strong>Cotação fixa de R$5,17 </strong> informada diretamente no código";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </section>
</body>
</html>