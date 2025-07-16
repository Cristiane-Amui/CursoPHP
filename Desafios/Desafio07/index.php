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
        $sal = $_GET["sal"];
        $min = 1380
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="sal" id="idsalario">
            Considerando o salário mínimo de <strong>R$1.380,00</strong>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $resul = $sal - $min;
            
        ?> 
    </section>
    
</body>
</html>