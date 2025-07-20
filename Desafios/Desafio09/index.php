<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="1valor">1º Nota</label>
            <input type="number" name="1val" id="id1val" step="0.0001">
            <label for="1peso">1º Peso</label>
            <input type="number" name="1pes" id="" step="0.0001">
            <label for="2valor">2º Nota</label>
            <input type="number" name="2val" id="id2val" step="0.0001">
            <label for="2peso">2º Peso</label>
            <input type="number" name="2pes" id="" step="0.0001">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $val1 = $_GET["1val"] ?? 0;
            $val2 = $_GET["2val"] ?? 0;
            $pes1 = $_GET["1pes"] ?? 0;
            $pes2 = $_GET["2pes"] ?? 0;
            $medS = ($val1 + $val2) / 2;
            $medP = ($val1 * $pes1 + $val2 * $pes2) / ($pes1 +$pes2);
            
            echo "Analisando os valores $val1 e $val2:";

            echo "<ul><li>A<strong> média Aritmética Simples</strong> entre os valores é igual a " . number_format($medS, 2, ",", ".") . ".</li>";

            echo "<li>A<strong> Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é igual a " . number_format($medP, 2, ",", ".") . ".</li></ul>";

        ?>
    </section>
</body>
</html>