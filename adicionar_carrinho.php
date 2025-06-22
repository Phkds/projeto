<<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = [
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'imagem' => $_POST['imagem'],
    ];

    $_SESSION['carrinho'][] = $produto;
}

header('Location: carrinho.php');
exit;
