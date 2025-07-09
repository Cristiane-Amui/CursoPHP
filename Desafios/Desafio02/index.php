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
            echo "<br>O valor gerado foi <strong>" . mt_rand(0,100); //pode usar rand() - que é mais antigo, mas usa os mesmos algoritimos ou pode usar o random_int() para números aleatórios criptograficamente seguros é mais lenta
            ?>
            <input type="submit" value="Gerar outro">
        </form>

        <button onclick="javascript:history.go(-1)">&#x1F504; Gerar outro</button>

        <button onclick="javascript:docment.location.reload()">&#x1F504; Gerar outro</button>  <!-- esse é o mais correto para essse caso -->
    </section>
    
</body>
</html>