<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php
    // Exercicio 2: Calcular gasolina por km

    // A) Preço médio do litro de gasolina
    $precoGaso = 5.40; 

    // B) Consumo médio do carro em km/litro
    $conmed = 12; 

    // C) Distância em km
    $distancia = 300; 

    // D) Cálculo do valor gasto por km
    $valorgaskm = $precoGaso / $conmed; 

    // E) Cálculo do gasto em cada trecho da viagem
    $gastoPorTrecho = $valorgaskm * $distancia; 

    // F) Cálculo do gasto total considerando ida e volta
    $gastotidaevolta= $gastoPorTrecho * 2; 
    
    echo "<br><br> Para uma viagem de " . $distancia . " km, você irá gastar em média R$" . $gastoPorTrecho . " em cada trecho. Para ida e volta, o valor total fica em R$" . $gastotidaevolta . ".";
    ?>
</body>
</html>


    
