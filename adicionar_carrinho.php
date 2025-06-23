<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Produto';
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'R$ 0,00';
    $imagem = filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'imagens/padrao.jpg';
    $tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'M';

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Cria um id único para produto + tamanho, para diferenciar itens no carrinho
    $idProduto = md5($nome . $tamanho);

    if (isset($_SESSION['carrinho'][$idProduto])) {
        $_SESSION['carrinho'][$idProduto]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$idProduto] = [
            'nome' => $nome,
            'preco' => $preco,
            'imagem' => $imagem,
            'tamanho' => $tamanho,
            'quantidade' => 1
        ];
    }
}

session_write_close();
header('Location: carrinho.php');
exit;
