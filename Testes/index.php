<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes avulsos</title>
</head>
<body>
    <?php 
        $resultado = 50 / 2 + 3 ** 2; //ordem de operadores
        echo "O resultado é $resultado";

        $paren = 50 / (2 + 3) ** 2; //o parentese é feito primeiro
        echo "<br> O resultado é $paren";

        $diviint = intdiv(5, 2); //divisão inteira
        echo "<br> O resultado é $diviint";

        $resto = 5%2; //resto da divisão
        echo "<br> O resultado é $resto";
    ?>
</body>
</html>