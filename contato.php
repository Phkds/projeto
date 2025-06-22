<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vitoriano Sports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    main {
      flex: 1;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="imagens/logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre nós</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
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
