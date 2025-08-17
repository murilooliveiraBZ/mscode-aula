<?php
require_once './Classes/PessoaInterface.php';
require_once './Classes/Pessoa.php';
require_once './Classes/PessoaFisica.php';
require_once './Classes/PessoaJuridica.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_POST['tipo'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $documento = $_POST['documento'] ?? '';

    if ($tipo === 'fisica') {
        $pessoa = new PessoaFisica($nome, $documento);
    } elseif ($tipo === 'juridica') {
        $pessoa = new PessoaJuridica($nome, $documento);
    } else {
        echo "Tipo inválido!";
        exit;
    }

    echo "<pre>";
    var_dump($pessoa);
    echo "</pre>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <h1>Cadastro de Pessoa</h1>
    <form method="post">
        <label>Tipo de Pessoa:</label><br>
        <input type="radio" name="tipo" value="fisica" required> Pessoa Física
        <input type="radio" name="tipo" value="juridica" required> Pessoa Jurídica
        <br><br>

        <label>Nome:</label><br>
        <input type="text" name="nome" required>
        <br><br>

        <label>Documento (CPF ou CNPJ):</label><br>
        <input type="text" name="documento" required>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
