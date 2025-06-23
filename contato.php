
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vitoriano Sports</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    /* Footer fixo no final */
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

    /* Banner */
    .banner-img {
      max-height: 300px;
      object-fit: cover;
      width: 100%;
      display: block;
    }
  </style>
  <style>
  .btn-cinza-escuro {
    background-color: #343a40; /* cinza escuro */
    color: white;
    border: none;
    transition: background-color 0.3s ease;
  }

  .btn-cinza-escuro:hover,
  .btn-cinza-escuro:focus {
    background-color: #23272b; /* cinza ainda mais escuro no hover */
    color: white;
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
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="produtos.php">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre nós</a></li>
          <li class="nav-item"><a class="nav-link active" href="contato.php">Contato</a></li>
            <li class="nav-item"> <a class="nav-link" href="carrinho.php" title="Carrinho">
    <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
      </div>
    </div>
  </nav>
  <!-- Conteúdo principal -->
  <main class="container mt-5">
    <form id="form-contato">
      <h2>Formulário de Contato</h2>
      <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="sobrenome" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com" required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" />
        </div>
      </div>

      <div class="mb-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" />
      </div>

      <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem aqui..." required></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">Enviar</button>
      </div>

      <div id="mensagem-sucesso" class="alert alert-success mt-3 d-none" role="alert">
        Formulário enviado com sucesso!
      </div>
    </form>
  </main>

  <!-- Footer fixo -->
  <footer class="bg-dark text-white text-center text-lg-start mt-5">
    <div class="container p-4">
      <div class="row">
        <!-- Sobre -->
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="text-uppercase">Vitoriano Sports</h5>
          <p>Camisas de time com qualidade e estilo. Nosso compromisso é com sua paixão pelo futebol!</p>
        </div>
        <!-- Contato -->
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="text-uppercase">Contato</h5>
          <ul class="list-unstyled">
            <li>Email: paulokondazeski043@gmail.com</li>
            <li>Telefone: (44) 99865-7175</li>
            <li>Instagram: @vitorianosports</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3 bg-secondary">
      © 2025 Vitoriano Sports - Todos os direitos reservados
    </div>
  </footer>

  <script src="validaçao.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
