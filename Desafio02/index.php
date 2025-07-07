<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <form action="index.php" method="get">
            <?php
            echo "Gerando números aleatórios entre 0, 100...";
            echo "<br>O valor gerado foi <strong>" . rand(0,100);
            ?>
            <input type="submit" value="Recarregar">
        </form>
    </section>
    
</body>
</html>