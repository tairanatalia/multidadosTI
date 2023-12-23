<?php

include 'DataRequest.php';

$dataRequest = new DataRequest();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    $dados = [];

    switch ($tipo) {
        case 'Clientes':
            $dados = $dataRequest->dadosClientes();
            break;
        case 'Fornecedores':
            $dados = $dataRequest->dadosFornecedores();
            break;
        case 'Usuarios':
            $dados = $dataRequest->dadosUsuarios();
            break;
    }

    header('Content-Type: application/json');
    echo json_encode($dados);
} else {
    echo json_encode(['erro' => 'Tipo de requisição inválido']);
}