<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_POST['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="" step="5" value="<?=$valor?>" required>
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <?php 
        
        $pri = intdiv($valor, 100);
        $resto1 = $valor % 100;
        $seg = intdiv($resto1, 50);
        $resto2 = $valor % 50;
        $ter = intdiv($resto2, 10);
        $resto3 = $valor % 10;
        $qua = intdiv($resto3, 5);

        ?>

        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li> <img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$pri?></li>
            <li> <img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$seg?></li>
            <li> <img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$ter?></li>
            <li> <img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$qua?></li>
        </ul>
        


    </section>
</body>
</html>