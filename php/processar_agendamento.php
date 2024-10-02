<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificação dos dados
    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['data'])) {
        echo json_encode(['status' => 'error', 'message' => 'Todos os campos são obrigatórios']);
        exit();
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Email inválido']);
        exit();
    }
}

// processar_agendamento.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aqui você pode processar os dados do formulário
    // Para fins de teste, apenas retornamos uma resposta
    echo json_encode(['status' => 'success']);
    exit();
}
