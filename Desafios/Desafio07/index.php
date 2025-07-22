<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $min = 1_380.60;
        $sal = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="sal" id="idsalario" value="<?=$sal?>" step="0.001">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($min, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <?php 

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $cociente = intdiv($sal, $min);
            $resto = $sal % $min;
            
            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $sal, "BRL") . " ganha<strong> $cociente salários mínimos</strong> + " . numfmt_format_currency($padrao, $resto, "BRL")
        ?> 
    </section>
    
</body>
</html>