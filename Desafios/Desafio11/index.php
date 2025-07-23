<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco =  $_GET['preco'] ?? 0;
        $perc =  $_GET;['percentual'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="" step="0.001" value="<?=$preco?>">
            <label for="percentual"> Qual será meu percentual de reajuste </label>
            <input type="range" name="percentual" min="0" max="100" value="50">
            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section>
        <h2>Reasultado do Reajuste</h2>
        <?php 
        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $novo = $perc * 0.01 * $preco + $preco;

        echo "O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$perc% de aumento</strong> vai passar a custar<strong> " . numfmt_format_currency($padrao, $novo, "BRL") . " </strong>a partir de agora.";
        
        ?>
    </section>
</body>
</html>