<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_POST['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="" step="5" value="<?=$valor?>" required>
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$X realizado</h2>
        <?php 
        
        $pri = intdiv($valor, 100);
        $resto1 = $valor % 100;
        $seg = intdiv($resto1, 50);
        $resto2 = $valor % 50;
        $ter = intdiv($resto2, 10);
        $resto3 = $valor % 10;
        $qua = intdiv($resto3, 5);


        echo "O caixa eletrônico vai te entregar as seguintes notas:";
        echo "<ul><li> R$100,00 x $pri</li>";
        echo "<li> R$50,00 x $seg</li>";
        echo "<li> R$10,00 x $ter</li>";
        echo "<li> R$5,00 x $qua</li></ul>";
        ?>
        


    </section>
</body>
</html>