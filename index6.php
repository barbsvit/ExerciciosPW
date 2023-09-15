<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <?php
        // Exercício 6

         // A)  Criar o array de heróis
            $herois = array('<br><br>Homem-Aranha', 'Batman', 'Superman', 'Aquaman');

        // B) Exibir todos os heróis separados por hífen
            echo implode(' - ', $herois);

        // C) Exibir apenas o nome do primeiro herói
            echo "<br><br>O primeiro herói da lista é: " . $herois[0];

        // D) Exibir a quantidade de elementos do array
            echo "<br><br>A quantidade de heróis é: " . count($herois);

?>
</body>
</html>