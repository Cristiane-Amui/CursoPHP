<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? '1';
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="idnum" step="0.0001" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            
            $quad = sqrt($num);
            $cub = $num ** (1/3);

            echo "Analisando o <strong>número $num</strong>, temos:";

            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($quad, 3, ",", ".") . "</strong></li>";

            echo "<li>A sua raiz cúbica é <strong>". number_format($cub, 3, ",", ".") . "</strong></li></ul>";

        ?>

    </section>
</body>
</html>