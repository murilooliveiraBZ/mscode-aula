<?php

require_once __DIR__ . '/Database.php';

if (!empty($_POST)) {
    $nome = $_POST['nome'] ?? '';

    // Validação simples
    if (empty($nome)) {
        echo 'Preencha todos os campos.';
        exit;
    }

    $conn = (new Database())->getConnection();
    $sql = 'INSERT INTO alunos (nome) VALUES (:nome)';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['nome' => $nome]);
}

// Redireciona para index.php após inserir
header('Location: /aula8/index.php');
exit;
