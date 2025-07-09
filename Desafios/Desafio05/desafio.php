<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
        $num = $_GET["numb"];
        echo "Analisando o número <strong>$num</strong> informado pelo usuário:<br>";
        echo "<br> \u{2022} A parte inteira do número é <strong> " . abs($num);
        echo "</strong><br> \u{2022} A parte fracionária do número é "; //<strong>" . Ev::now($num): float . "</strong>";
        ?>
    </section>
    
</body>
</html>