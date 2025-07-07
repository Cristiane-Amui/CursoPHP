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
            $reais = $_GET["reais"];
            $dollar = round($reais / 5.22,2);
            echo "Seus R$ $reais equivalem a <strong>US$ $dollar</strong><br>";
            echo "<br><strong>Cotação fixa de R$5,22 </strong> informada diretamente no código";
        ?>
        <p><a href="javascript:history.go(-1)">
            <input type="submit" value="Voltar"></a></p>
    </section>
</body>
</html>