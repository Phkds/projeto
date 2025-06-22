<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vitoriano Sports</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

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
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre nós</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

<main class="container mt-5">
    <h1>Sobre nós</h1>
    <p>Bem-vindo à Vitoriano Sports, sua loja online de camisas de time! Somos apaixonados por futebol e dedicados a oferecer as melhores camisas para os verdadeiros torcedores.</p>
    <p>Nossa missão é proporcionar qualidade, conforto e estilo em cada camisa que oferecemos. Trabalhamos com as melhores marcas e garantimos que nossos produtos atendam aos mais altos padrões.</p>
    <p>Explore nossa coleção e encontre a camisa do seu time do coração!</p>
<!-- Footer -->
 <footer class="bg-dark text-white text-center text-lg-start mt-auto">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase">Vitoriano Sports</h5>
          <p>Camisas de time com qualidade e estilo. Nosso compromisso é com sua paixão pelo futebol!</p>
        </div>

        <div class="col-lg-3 mb-4 mb-lg-0">
          <h5 class="text-uppercase">Contato</h5>
          <ul class="list-unstyled">
            <li>Email: <a href="mailto:paulokondazeski043@gmail.com" class="text-white">paulokondazeski043@gmail.com</a></li>
            <li>Telefone: <a href="tel:+5544998657175" class="text-white">(44) 99865-7175</a></li>
            <li>Instagram: <a href="https://instagram.com/vitorianosports" target="_blank" rel="noopener" class="text-white">@vitorianosports</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="text-center p-3 bg-secondary">
      &copy; 2025 Vitoriano Sports - Todos os direitos reservados
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
