<?php
session_start();

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Produtos disponíveis (deveriam estar em um include ou banco de dados idealmente)
$produtos = [
    'camisa1' => [
        'nome' => 'Camisa do Real Madrid',
        'imagem' => 'imagens/real madri.jpg',
        'preco' => 'R$ 150,00'
    ],
    'camisa2' => [
        'nome' => 'Camisa do Bayern de Munique',
        'imagem' => 'imagens/bayer.jpg',
        'preco' => 'R$ 140,00'
    ],
    // Adicione mais produtos com IDs únicos
];

// Adicionar item ao carrinho
if (isset($_GET['adicionar'])) {
    $id = $_GET['adicionar'];
    if (isset($produtos[$id])) {
        if (!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = [
                'nome' => $produtos[$id]['nome'],
                'imagem' => $produtos[$id]['imagem'],
                'preco' => $produtos[$id]['preco'],
                'quantidade' => 1
            ];
        } else {
            $_SESSION['carrinho'][$id]['quantidade']++;
        }
    }
}

// Remover item do carrinho
if (isset($_GET['remover'])) {
    $id = $_GET['remover'];
    unset($_SESSION['carrinho'][$id]);
}

$carrinho = $_SESSION['carrinho'];
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Meu Carrinho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

  <h1>Carrinho de Compras</h1>

  <?php if (empty($carrinho)): ?>
    <p>Seu carrinho está vazio.</p>
  <?php else: ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Imagem</th>
          <th>Produto</th>
          <th>Preço</th>
          <th>Qtd</th>
          <th>Subtotal</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($carrinho as $id => $item): 
          $precoUnitario = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
          $subtotal = $precoUnitario * $item['quantidade'];
          $total += $subtotal;
        ?>
          <tr>
            <td><img src="<?= $item['imagem'] ?>" width="80"></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['preco'] ?></td>
            <td><?= $item['quantidade'] ?></td>
            <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
            <td><a href="?remover=<?= $id ?>" class="btn btn-sm btn-danger">Remover</a></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td colspan="4"><strong>Total</strong></td>
          <td colspan="2"><strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></td>
        </tr>
      </tbody>
    </table>
    <a href="carrinho.php" class="btn btn-secondary">Continuar Comprando</a>
  <?php endif; ?>

</body>
</html>
