<?php
session_start();

// Inicializa o carrinho se ainda não estiver definido
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

$carrinho = &$_SESSION['carrinho']; // referência para facilitar
$total = 0;

// Remover item do carrinho
if (isset($_GET['remover'])) {
    $id = $_GET['remover'];
    unset($carrinho[$id]);
    header('Location: carrinho.php');
    exit;
}

// Adicionar item ao carrinho
if (isset($_GET['adicionar'])) {
    $id = $_GET['adicionar'];

    if (isset($carrinho[$id])) {
        $carrinho[$id]['quantidade']++;
    } else {
        $nome = $_GET['nome'] ?? 'Produto';
        $preco = $_GET['preco'] ?? 'R$ 0,00';
        $imagem = $_GET['imagem'] ?? 'imagens/padrao.jpg';

        $carrinho[$id] = [
            'nome' => $nome,
            'preco' => $preco,
            'imagem' => $imagem,
            'quantidade' => 1
        ];
    }

    header('Location: carrinho.php');
    exit;
}

// Diminuir quantidade de um item
if (isset($_GET['diminuir'])) {
    $id = $_GET['diminuir'];
    if (isset($carrinho[$id])) {
        $carrinho[$id]['quantidade']--;

        if ($carrinho[$id]['quantidade'] <= 0) {
            unset($carrinho[$id]);
        }
    }

    header('Location: carrinho.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Meu Carrinho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container py-4">

  <h1 class="mb-4">Carrinho de Compras</h1>

  <?php if (empty($carrinho)): ?>
    <div class="alert alert-info">Seu carrinho está vazio.</div>
    <a href="index.php" class="btn btn-primary">Voltar à loja</a>
  <?php else: ?>
    <table class="table table-bordered align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Imagem</th>
          <th>Produto</th>
          <th>Preço Unitário</th>
          <th>Quantidade</th>
          <th>Subtotal</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($carrinho as $id => $item): 
          // Converter preço de formato "R$ 123,45" para float 123.45
          $precoUnit = floatval(str_replace(['R$', '.', ','], ['', '', '.'], $item['preco']));
          $subtotal = $precoUnit * $item['quantidade'];
          $total += $subtotal;
        ?>
          <tr>
            <td><img src="<?= htmlspecialchars($item['imagem']) ?>" width="70" alt="<?= htmlspecialchars($item['nome']) ?>"></td>
            <td><?= htmlspecialchars($item['nome']) ?></td>
            <td><?= htmlspecialchars($item['preco']) ?></td>
            <td>
              <a href="?diminuir=<?= urlencode($id) ?>" class="btn btn-sm btn-outline-secondary">−</a>
              <?= $item['quantidade'] ?>
              <a href="?adicionar=<?= urlencode($id) ?>&nome=<?= urlencode($item['nome']) ?>&preco=<?= urlencode($item['preco']) ?>&imagem=<?= urlencode($item['imagem']) ?>" class="btn btn-sm btn-outline-secondary">+</a>
            </td>
            <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
            <td><a href="?remover=<?= urlencode($id) ?>" class="btn btn-sm btn-danger">Remover</a></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td colspan="4" class="text-end"><strong>Total:</strong></td>
          <td colspan="2"><strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></td>
        </tr>
      </tbody>
    </table>

    <div class="d-flex justify-content-between">
      <a href="produtos.php" class="btn btn-secondary">Continuar Comprando</a>
      <a href="finalizar.php" class="btn btn-success">Finalizar Compra</a>
    </div>
  <?php endif; ?>

</body>
</html>
