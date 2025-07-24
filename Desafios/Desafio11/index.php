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
        $preco =  $_GET['preco'] ?? '0.1';
        $perc =  $_GET['percentual'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>" required>

            <label for="percentual"> Qual será meu percentual de reajuste? (<strong><span id="p">?</span>%</strong>) </label>

            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$perc?>">
            
            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $aumento = ($perc * $preco) / $preco;
        $novo = $preco + $aumento;

        echo "O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$perc% de aumento</strong> vai passar a custar<strong> " . numfmt_format_currency($padrao, $novo, "BRL") . " </strong>a partir de agora.";
        
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reaj.value
        }
    </script>
</body>
</html>