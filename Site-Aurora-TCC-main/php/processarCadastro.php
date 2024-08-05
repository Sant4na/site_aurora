<?php
// Inclui o arquivo de conexão
include 'db.php';

// Obter dados do formulário
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['data-nascimento'];

try {
    // Iniciar uma transação
    $conn->begin_transaction();

    // Inserir dados na tabela usuarios
    $sql = "INSERT INTO clientes (nome, sexo, data_nascimento, cpf) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        throw new Exception("Erro na preparação da declaração: " . $conn->error);
    }

    // Vincula os parâmetros e executa a declaração
    $stmt->bind_param("ssss", $nome, $sexo, $dataNascimento, $cpf);

    if (!$stmt->execute()) {
        throw new Exception("Erro ao inserir usuário: " . $stmt->error);
    }

    // Obtém o ID do usuário inserido
    $usuarioId = $stmt->insert_id;

    // Inserir dados na tabela telefone
    $sql = "INSERT INTO telefones (id_cliente, numero) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        throw new Exception("Erro na preparação da declaração: " . $conn->error);
    }

    // Vincula os parâmetros e executa a declaração
    $stmt->bind_param("is", $usuarioId, $telefone);

    if (!$stmt->execute()) {
        throw new Exception("Erro ao inserir telefone: " . $stmt->error);
    }

    // Se tudo ocorreu bem, confirma a transação
    $conn->commit();
    echo 'Cadastro realizado com sucesso!';
} catch (Exception $e) {
    // Em caso de erro, desfaz a transação e exibe a mensagem de erro
    $conn->rollback();
    echo 'Erro: ' . $e->getMessage();
}

// Fecha a declaração e a conexão
$stmt->close();
$conn->close();
