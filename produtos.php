<?php
// Array de produtos
$produtos = [
    'times_europeus' => [
        ['nome' => 'Camisa do Real Madrid', 'imagem' => 'imagens/real madri.jpg', 'preco' => 'R$ 150,00'],
        ['nome' => 'Camisa do Bayern de Munique', 'imagem' => 'imagens/bayer.jpg', 'preco' => 'R$ 140,00'],
        ['nome' => 'Camisa do Manchester United', 'imagem' => 'imagens/manchester u.jpg', 'preco' => 'R$ 160,00'],
        ['nome' => 'Camisa do Barcelona', 'imagem' => 'imagens/barça.jpg', 'preco' => 'R$ 155,00'],
        ['nome' => 'Camisa do Liverpool', 'imagem' => 'imagens/liverpool.jpg', 'preco' => 'R$ 145,00'],
        ['nome' => 'Camisa do Paris Saint-Germain', 'imagem' => 'imagens/psg.jpg', 'preco' => 'R$ 165,00'],
        ['nome' => 'Camisa do Borussia', 'imagem' => 'imagens/bvb.jpg', 'preco' => 'R$ 150,00'],
        ['nome' => 'Camisa do Juventus', 'imagem' => 'imagens/juventus.jpg', 'preco' => 'R$ 155,00'],
        ['nome' => 'Camisa do Manchester Roma', 'imagem' => 'imagens/roma.jpg', 'preco' => 'R$ 160,00'],
        ['nome' => 'Camisa do Inter de Milão', 'imagem' => 'imagens/inter.jpg', 'preco' => 'R$ 150,00'],
        ['nome' => 'Camisa do Atlético de Madrid', 'imagem' => 'imagens/atletico de M.jpg', 'preco' => 'R$ 145,00']
    ],
    'times_brasileiros' => [
        ['nome' => 'Camisa do Flamengo', 'imagem' => 'imagens/flamengo.jpg', 'preco' => 'R$ 130,00'],
        ['nome' => 'Camisa do Palmeiras', 'imagem' => 'imagens/palmeiras.jpg', 'preco' => 'R$ 125,00'],
        ['nome' => 'Camisa do São Paulo', 'imagem' => 'imagens/sao paulo.jpg', 'preco' => 'R$ 135,00'],
        ['nome' => 'Camisa do Santos', 'imagem' => 'imagens/santos.jpg', 'preco' => 'R$ 120,00'],
        ['nome' => 'Camisa do Corinthians', 'imagem' => 'imagens/corinthians.jpg', 'preco' => 'R$ 130,00'],
        ['nome' => 'Camisa do Grêmio', 'imagem' => 'imagens/gremio.jpg', 'preco' => 'R$ 125,00'],
        ['nome' => 'Camisa do Internacional', 'imagem' => 'imagens/inter nacional.jpg', 'preco' => 'R$ 135,00'],
        ['nome' => 'Camisa do Atlético Mineiro', 'imagem' => 'imagens/atletico.jpg', 'preco' => 'R$ 130,00'],
        ['nome' => 'Camisa do Cruzeiro', 'imagem' => 'imagens/cruzeiro.jpg', 'preco' => 'R$ 125,00']
    ],
    'retro' => [
        ['nome' => 'Camisa Retro 80s', 'imagem' => 'imagens/whest ham retro.jpg', 'preco' => 'R$ 100,00'],
        ['nome' => 'Camisa Retro Anos 70', 'imagem' => 'imagens/retro real.jpg', 'preco' => 'R$ 110,00'],
        ['nome' => 'Camisa Retro Anos 90', 'imagem' => 'imagens/milan retro.jpg', 'preco' => 'R$ 120,00'],
        ['nome' => 'Camisa Retro Anos 2000', 'imagem' => 'imagens/manchester u retro.jpg', 'preco' => 'R$ 130,00'],
        ['nome' => 'Camisa Retro Clássica', 'imagem' => 'imagens/frança retro.jpg', 'preco' => 'R$ 140,00'],
        ['nome' => 'Camisa Retro Vintage', 'imagem' => 'imagens/barça retro.jpg', 'preco' => 'R$ 150,00'],
        ['nome' => 'Camisa Retro Estilo Anos 60', 'imagem' => 'imagens/arsenal retro.jpg', 'preco' => 'R$ 110,00'],
        ['nome' => 'Camisa Retro Estilo Anos 50', 'imagem' => 'imagens/retro.jpg', 'preco' => 'R$ 120,00']
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vitoriano Sports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    footer {
      flex-shrink: 0;
    }

    .banner-img {
      max-height: 300px;
      object-fit: cover;
      width: 100%;
      display: block;
    }

    .btn-cinza-escuro {
      background-color: #343a40;
      color: white;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-cinza-escuro:hover,
    .btn-cinza-escuro:focus {
      background-color: #23272b;
      color: white;
    }

    .produto {
      display: inline-block;
      width: 200px;
      margin: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    .produto img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .filtro {
      margin: 20px 0;
      text-align: center;
    }

    .filtro button {
      margin: 5px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="imagens/logo.png" alt="Logo Vitoriano Sports" width="80" height="80" class="me-2" />
        <span>Vitoriano Sports</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre nós</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    <h1 class="text-center my-4">Camisas Vitoriano Sports</h1>

    <div class="filtro">
      <button class="btn btn-cinza-escuro" onclick="filtrarProdutos('todos')">Todos</button>
      <button class="btn btn-cinza-escuro" onclick="filtrarProdutos('times_brasileiros')">Brasileiros</button>
      <button class="btn btn-cinza-escuro" onclick="filtrarProdutos('retro')">Retrô</button>
      <button class="btn btn-cinza-escuro" onclick="filtrarProdutos('times_europeus')">Europeus</button>
    </div>

    <div id="produtos" class="text-center">
      <?php foreach ($produtos as $categoria => $lista): ?>
        <?php foreach ($lista as $produto): ?>
          <div class="produto categoria-<?= $categoria ?>">
            <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
            <h5><?= $produto['nome'] ?></h5>
            <p><?= $produto['preco'] ?></p>
          </div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>
  </main>

  <footer class="bg-light text-center py-3 mt-auto">
    <p class="mb-0">&copy; <?= date("Y") ?> Vitoriano Sports. Todos os direitos reservados.</p>
  </footer>

  <script>
    function filtrarProdutos(categoria) {
      const todos = document.querySelectorAll('.produto');
      todos.forEach(produto => produto.style.display = 'none');

      if (categoria === 'todos') {
        todos.forEach(produto => produto.style.display = 'inline-block');
      } else {
        document.querySelectorAll(`.categoria-${categoria}`).forEach(produto => {
          produto.style.display = 'inline-block';
        });
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
