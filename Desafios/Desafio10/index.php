<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nasc = $_GET['nasc'] ?? 0;
        $fut = $_GET['fut'] ?? 0;
        $data = date("Y");
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="" value="<?=$nasc?>" required>
            <label for="fut"><?php 
            echo "Quer saber sua idade em que ano? (atualmente estamos em $data)"
            ?> </label>
            <input type="number" name="fut" id="" value="<?=$fut?>" required>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 

            $idade = $fut - $nasc;

            echo "Quem nasceu em $nasc vai ter<strong>  $idade anos </strong>em $fut!"
        ?>
    </section>
</body>
</html>