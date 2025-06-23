<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valida e obtém os dados do POST com fallback
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Produto';
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'R$ 0,00';
    $imagem = filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'imagens/padrao.jpg';

    // Inicializa o carrinho se não existir
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Verifica se o produto já está no carrinho (buscando pelo nome)
    $existe = false;
    foreach ($_SESSION['carrinho'] as &$item) {
        if ($item['nome'] === $nome) {
            $item['quantidade'] = ($item['quantidade'] ?? 1) + 1;
            $existe = true;
            break;
        }
    }
    unset($item);

    // Se não existe, adiciona novo produto com quantidade 1
    if (!$existe) {
        $_SESSION['carrinho'][] = [
            'nome' => $nome,
            'preco' => $preco,
            'imagem' => $imagem,
            'quantidade' => 1
        ];
    }
}

session_write_close(); // salva sessão antes do redirect
header('Location: carrinho.php');
exit;