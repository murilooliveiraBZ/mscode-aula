<?php 
    $soma = "";
    if(isset($_POST['number1']) && isset($_POST['number2'])){
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $soma = $number1 + $number2;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="number1">1 número</label><br>
            <input type="number" name="number1" id="number1" required>
        </div>
        <div>
            <label for="number2">2 número</label><br>
            <input type="number" name="number2" id="number2" required>
        </div><br>
        <button type="submit" name="btnSoma">SOMAR</button>
        <br>
        <label for="txtResultado">Resultado:</label><br>
        <input type="text" name="result" readonly value="<?php echo $soma; ?>">
    </form>
</body>
</html>