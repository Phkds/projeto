<?php
session_start();

$total = 0;
$carrinho = $_SESSION['carrinho'] ?? [];

// Remover item
if (isset($_GET['remover'])) {
    $id = $_GET['remover'];
    unset($_SESSION['carrinho'][$id]);
    header('Location: carrinho.php');
    exit;
}

// Adicionar item
if (isset($_GET['adicionar'])) {
    $id = $_GET['adicionar'];
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
    }
    header('Location: carrinho.php');
    exit;
}

// Reduzir item
if (isset($_GET['diminuir'])) {
    $id = $_GET['diminuir'];
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']--;
        if ($_SESSION['carrinho'][$id]['quantidade'] <= 0) {
            unset($_SESSION['carrinho'][$id]);
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
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
          $precoUnit = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
          $subtotal = $precoUnit * $item['quantidade'];
          $total += $subtotal;
        ?>
          <tr>
            <td><img src="<?= $item['imagem'] ?>" width="70"></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['preco'] ?></td>
            <td>
              <a href="?diminuir=<?= $id ?>" class="btn btn-sm btn-outline-secondary">−</a>
              <?= $item['quantidade'] ?>
              <a href="?adicionar=<?= $id ?>" class="btn btn-sm btn-outline-secondary">+</a>
            </td>
            <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
            <td><a href="?remover=<?= $id ?>" class="btn btn-sm btn-danger">Remover</a></td>
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
