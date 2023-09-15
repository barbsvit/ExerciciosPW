<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php
        // Exercicio 1: Calculo de média
        // A) Receber o nome de um aluno
    $nome = 'Yasmim';

    // B) Receber as notas do aluno 
    $n1 = 9; 
    $n2 = 2.0;
    $n3 = 1.5;
    $n4 = 10;

    // C) Calculando a média 
    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    // D) Formatar a média com duas casas decimais e vírgula
    $media_formatada = number_format($media, 1, ',', '.');

    // E) Exibição do resultado
     echo "A média do aluno " . $nome . " é:     " . $media_formatada;

    ?>
</body>
</html>