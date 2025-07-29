<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mensagemErro = '';
$valorMaximoTabuada = 10;
$tabuada = null;
if (isset($_GET['tabuada'])) {
    $valorTabuadaInteiro = intval($_GET['tabuada']);
    if ($valorMaximoTabuada < $valorTabuadaInteiro) {
        $mensagemErro = 'O valor da tabuada não pode ser manipulado via GET e apenas no select';
    }

    $tabuada = $valorTabuadaInteiro;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <select name="tabuada">
            <?php
            for ($i = 1; $i <= $valorMaximoTabuada; $i++) {
                echo sprintf(
                    '<option value="%d">%d</option>',
                    $i,
                    $i,
                );
            }
            ?>
        </select>
        <button type="submit">Ver</button>
    </form>

    <div>
        <?php
        if ('' === $mensagemErro && null !== $tabuada && 0 !== $tabuada) {
            for ($j = 1; $j <= $valorMaximoTabuada; $j++) {
                $resultado = $j + $tabuada;

                echo sprintf('<span>%d + %d = %d</span> </br>', $j, $tabuada, $resultado);
            }
        }

        if ('' !== $mensagemErro) {
            echo '<span>' . $mensagemErro . '</span>';
        }
        ?>
    </div>
</body>

</html>
