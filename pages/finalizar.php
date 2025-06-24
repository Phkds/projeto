<?php
session_start();

// Verifica se o carrinho existe e tem itens
if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
    header('Location: carrinho.php');
    exit;
}

$carrinho = $_SESSION['carrinho'];
$mensagem = "*Olá! Gostaria de finalizar minha compra com os seguintes itens:*\n\n";
$total = 0;

// Monta a mensagem com os produtos
foreach ($carrinho as $item) {
    $nome = $item['nome'] ?? 'Produto';
    $preco = $item['preco'] ?? 'R$ 0,00';
    $quantidade = $item['quantidade'] ?? 1;
    $tamanho = $item['tamanho'] ?? 'M';

    $mensagem .= "• {$nome} ({$tamanho}) - {$quantidade}x - {$preco}\n";

    // Converte preço em string para número
    $valor = floatval(str_replace(['R$', '.', ','], ['', '', '.'], $preco));
    $total += $valor * $quantidade;
}

$mensagem .= "\n*Total: R$ " . number_format($total, 2, ',', '.') . "*";

// Codifica a mensagem para a URL
$mensagemCodificada = urlencode($mensagem);

// Número do WhatsApp (com DDI e DDD, sem espaços ou símbolos)
$numero = '5544998657175';

// (Opcional) Limpa o carrinho após o redirecionamento
// unset($_SESSION['carrinho']);

// Redireciona para o WhatsApp
header("Location: https://wa.me/{$numero}?text={$mensagemCodificada}");
exit;
?>
