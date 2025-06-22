<?php
session_start();

$carrinho = $_SESSION['carrinho'] ?? [];

if (empty($carrinho)) {
    header('Location: carrinho.php');
    exit;
}

// Monta a mensagem do pedido
$mensagem = "*Olá! Gostaria de finalizar minha compra com os seguintes itens:*\n\n";
$total = 0;

foreach ($carrinho as $item) {
    $nome = $item['nome'];
    $preco = $item['preco'];
    $quantidade = $item ['quantidade '];
    $mensagem .= "• {$nome} - {$quantidade}x - {$preco}\n";

    $valor = floatval(str_replace(['R$', ','], ['', '.'], $preco));
    $total += $valor * $quantidade;
}

$mensagem .= "\n*Total: R$ " . number_format($total, 2, ',', '.') . "*";

// Codifica a mensagem para URL
$mensagem = urlencode($mensagem);

// Número do WhatsApp (formato internacional com DDI, DDD e número)
$numero = '554499865-7  175';

// Redireciona para o WhatsApp
header("Location: https://wa.me/{$numero}?text={$mensagem}");
exit;
