<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
<?php
    //Exercício 4 

    function calcularNovoSalario($salario) {
        if ($salario <= 1320.00) {
            // A) Aumento de 15% para salários até 1320.00
            $aumento = $salario * 0.15;
        } 
        else if ($salario <= 3500.00) {
            // B) Aumento de 10% para salários até 3500.00
            $aumento = $salario * 0.10;
        } 
        else {
            // C) Aumento de 5% para salários acima de 3500.00
            $aumento = $salario * 0.05;
        }
    
        $novoSalario = $salario + $aumento;
        return $novoSalario;
    }
    
    // D) Exemplo de uso da função
    $salarioFuncionario = 2500.00;
    $novoSalarioFuncionario = calcularNovoSalario($salarioFuncionario);
    
    // Apresentando o resultado
        echo "<br><br>O salário atual do funcionário é R$" . $salarioFuncionario . " e o novo salário será R$" . $novoSalarioFuncionario . ".";
    ?>
</body>
</html>