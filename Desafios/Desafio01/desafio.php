<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
    </header>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $numero = (int) $_GET["numero"] ?? 0;
            echo "<br>O número escolhido foi <strong>$numero</strong>";
            $ant = $numero - 1;
            $suc = $numero + 1;
            echo "<br>O Seu <I>antecessor</I> é $ant";
            echo "<br>O Seu <I>sucessor</I> é $suc";
        ?>
        
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>

    </section>
</body>
</html>