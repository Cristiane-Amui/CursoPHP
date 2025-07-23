<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de moedas Avançado</h1>
        <form action="desafio.php" method="get">
        <label for="reais">Quantos R$ você tem na carteira?</label>
        <input type="number" name="reais" id="idreais" step="0.01" value="<?=$reais?>">
        <input type="submit" value="Converter">
        </form>
    </section>
    
</body>
</html>