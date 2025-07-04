<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <?php 
        // 0x = hexadecimal 0b = binario 0 = octal
        // $nun = 0x1A;
        // echo "O valor da variável é $nun."

        // $v = 300;
        // var_dump($v); 

        // $num = (int)3e2; // 3 X 10(2) // coerção
        // // echo "O valor é $num";
        // var_dump($num); 

        // $casado = true;
        // $solteiro = false;
        // echo "O valor para casado é $casado.";
        // echo "O valor para solteiro é $solteiro."; //quando o valor é falso, não aparece nada.

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {   // tipo composto OBJECT
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>