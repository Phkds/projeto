<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
</head>
<body>
<h1>Produtos</h1>
<!-- Exemplo de produtos -->
<form method="post" action="">
    <input type="hidden" name="product_id" value="1">
    <input type="hidden" name="product_name" value="Produto A">
    <input type="hidden" name="product_price" value="50.00">
    Quantidade: <input type="number" name="quantity" value="1" min="1">
    <button type="submit" name="add">Adicionar ao Carrinho</button>
</form>

<form method="post" action="">
    <input type="hidden" name="product_id" value="2">
    <input type="hidden" name="product_name" value="Produto B">
    <input type="hidden" name="product_price" value="30.00">
    Quantidade: <input type="number" name="quantity" value="1" min="1">
    <button type="submit" name="add">Adicionar ao Carrinho</button>
</form>

<h2>Seu Carrinho</h2>
<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
            <th>Ações</th>
        </tr>
        <?php
        $total_price = 0;
        foreach ($_SESSION['cart'] as $item):
            $item_total = $item['product_price'] * $item['quantity'];
            $total_price += $item_total;
        ?>
        <tr>
            <td><?php echo htmlspecialchars($item['product_name']); ?></td>
            <td><?php echo number_format($item['product_price'], 2, ',', '.'); ?></td>
            <td><?php
<?php
session_start();

// Adicionar produto ao carrinho
if (isset($_POST['add'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Verifica se o carrinho já existe na sessão
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Adiciona ou atualiza o produto no carrinho
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['product_id'] == $product_id) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $_SESSION['cart'][] = [
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'quantity' => $quantity
        ];
    }
}

// Remover produto do carrinho
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['product_id'] == $remove_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Reindexa o array
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>

