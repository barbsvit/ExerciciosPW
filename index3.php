<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
<?php
//Exercício 3 

    // A) Preço médio do litro de etanol
    $precoEtanol = 3.49; 

    // B) Consumo médio do carro em km/litro
    $consumoMedio = 10;
    
    // C) Distância em km
    $dist = 240; 
    
    // D) Cálculo do valor gasto por km
    $valorgastokm= $precoEtanol / $consumoMedio; 
    
    // E) Cálculo do gasto em cada trecho da viagem
    $gastotrecho = $valorgastokm * $dist; 
    
    // F) Cálculo do gasto total considerando ida e volta
    $gastototalIdaVolta = $gastotrecho * 2; 
    
    // G) Apresentando o resultado
    echo "<br   ><br>O valor gasto por km é R$" . $valorgastokm . ".\n";
    echo "Para uma viagem de " . $dist . " km, você irá gastar em média R$" . $gastotrecho . " em cada trecho.\n";
    echo "Para ida e volta, o valor total fica em R$" . $gastototalIdaVolta . ".";
?>
</body>
</html>
<?php
