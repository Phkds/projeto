<<?php
session_start();

// Obtém o carrinho da sessão ou inicializa vazio
$carrinho = $_SESSION['carrinho'] ?? [];

if (empty($carrinho)) {
    // Se o carrinho estiver vazio, redireciona para a página do carrinho
    header('Location: carrinho.php');
    exit;
}

// Monta a mensagem do pedido
$mensagem = "*Olá! Gostaria de finalizar minha compra com os seguintes itens:*\n\n";
$total = 0;

foreach ($carrinho as $item) {
    // Corrige o índice 'quantidade' removendo espaço extra
    $nome = $item['nome'];
    $preco = $item['preco'];
    $quantidade = $item['quantidade']; 

    $mensagem .= "• {$nome} - {$quantidade}x - {$preco}\n";

    // Converte o preço para float, removendo 'R$' e vírgulas
    $valor = floatval(str_replace(['R$', ','], ['', '.'], $preco));
    $total += $valor * $quantidade;
}

// Adiciona o total à mensagem
$mensagem .= "\n*Total: R$ " . number_format($total, 2, ',', '.') . "*";

// Codifica a mensagem para URL
$mensagemCodificada = urlencode($mensagem);

// Número do WhatsApp (formato internacional com DDI, DDD e número)
$numero = '5544998657175'; // Removi espaços e caracteres especiais

// Redireciona para o WhatsApp com a mensagem
header("Location: https://wa.me/{$numero}?text={$mensagemCodificada}");
exit;
?>