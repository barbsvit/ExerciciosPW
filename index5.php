<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
<?php
    // Exercício 5 

    function calcularMulta($velocidade) {
        // A) Velocidade limite em km/h
        $limiteVelo = 50; 
        $multa = 0;
        $pontosPer = 0;
    
        if ($velocidade <= $limiteVelo * 1.1) {
            // B)  Velocidade até 10% acima do limite
            $multa = 230;
            $pontosPer = 4;
        } 
        elseif ($velocidade <= $limiteVelo * 1.2) {
            // C) Velocidade até 20% acima do limite
            $multa = 340;
            $pontosPer = 5;
        } 
        else {
            // D) Velocidade acima de 20% do limite
            $kmExce = $velocidade - $limiteVelo;
            $multa = $kmExce * 26.49;
            $pontosPer = 7;
        }
    
        return array('multa' => $multa, 'pontos' => $pontosPer);
    }
    
    // E) Exemplo de uso da função para uma velocidade específica
    $velocidadeMotorista = 55; // Exemplo: velocidade de 55 km/h
    $resultadoMulta = calcularMulta($velocidadeMotorista);
    
    echo "<br><br>Para a velocidade de " . $velocidadeMotorista . " km/h, a multa será de R$" . $resultadoMulta['multa'] . " e serão perdidos " . $resultadoMulta['pontos'] . " pontos na carteira.";
    ?>
</body>
</html>