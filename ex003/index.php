<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos Em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
    // 0x = hexadecimal ; 0b = Binário ; 0 = Octal
    $num = 010;
    echo "O valor  da variável é $num";

    $v = "Deyvison";
    var_dump($v);

    $num1 = (integer) 3e2; // 3x2^10 - coerção
    echo "O valor é $num1";
    var_dump($num1);

    $num2 = (float) "950"; //coerção
    var_dump($num2);
    
    $casado = true;
    var_dump($casado);
    print "O valor para casado é $casado"; //Print usado para exemplificar a difereça de retorno ao usar o tipo primitivo boleano nessa função.

    $vet = [6, 2.5, "Maria", 3, false];
    var_dump($vet);

    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>