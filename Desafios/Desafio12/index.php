<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $seg = $_POST['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="" required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 

        $sem = intdiv($seg, 604800);
        $sobra1 = $seg % 604800;
        $dia = intdiv($sobra1, 86400);
        $sobra2 = $sobra1 % 86400;
        $hor = intdiv($sobra2, 3600);
        $sobra3 = $sobra2 % 3600;
        $min = intdiv($sobra3, 60);
        $sobra4 = $sobra3 % 60;
        $segn = $sobra4;
        
        
        

        echo "Totalizando o valor digitado, <strong>" . number_format($seg, 0, ",", ".") . " segundos </strong>equivalem a um total de: ";
        echo "<ul><li>$sem Semanas</li>";
        echo "<li> $dia Dias</li>";
        echo "<li> $hor Horas</li>";
        echo "<li> $min Minutos</li>";
        echo "<li> $segn Segundos</li></ul>";

        ?>
    </section>
</body>
</html>