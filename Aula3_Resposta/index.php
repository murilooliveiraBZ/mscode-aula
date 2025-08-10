<?php 
    require_once './Interfaces/InterfaceCalculadora.php';
    require_once './Classes/Soma.php';
    require_once './Classes/Subtracao.php';
    require_once './Classes/Divisao.php';
    require_once './Classes/Multiplicacao.php';

    //Soma
    $a = 100;
    $b = 200;
    $calc1 = new Soma();
    $resultSoma = $calc1->Calcular($a, $b);
    echo "A soma entre <strong>$a</strong> e <strong>$b</strong> é <strong>$resultSoma</strong><br>";

    //Subtracao
    $calc2 = new Subtracao();
    $resultSubtracao = $calc2->Calcular($a,$b); 
    echo "A subtração entre<strong> $a</strong> e <strong>$b</strong> é <strong>$resultSubtracao</strong> <br>";

    //Multiplicacao
    $calc3 = new Multiplicacao();
    $resultMult = $calc3->Calcular($a,$b);

     echo "A multiplicação entre<strong> $a</strong> e <strong>$b</strong> é <strong>$resultMult</strong> <br>";

    //Divisão
    $calc4 = new Divisao();
    $resultDiv = $calc4->Calcular($a,$b);

     echo "A divisão entre<strong> $a</strong> e <strong>$b</strong> é <strong>$resultDiv</strong> <br>";
?>