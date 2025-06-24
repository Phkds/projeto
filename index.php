<?php
//index.php
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vitoriano Sports</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!-- Estilo customizado -->
  <style>
    body {
      background-color: #111;
      color: #fff;
    }

    .navbar {
      background-color: #1f1f1f;
    }

    .navbar .nav-link,
    .navbar-brand {
      color: #fff;
    }

    .navbar .nav-link:hover {
      color: #ffc107;
    }

    .banner-img {
      max-height: 400px;
      object-fit: cover;
      width: 100%;
    }

    .btn-cinza-escuro {
      background-color: #343a40;
      color: white;
      border: none;
      transition: 0.3s;
    }

    .btn-cinza-escuro:hover {
      background-color: #212529;
      color: white;
    }

    footer {
      background-color: #1f1f1f;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="imagens/logo.png" alt="Logo Vitoriano Sports" width="60" height="60" class="me-2" />
        <span class="fw-bold">Vitoriano Sports</span>
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-2">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="produtos.php">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
          <li class="nav-item">
            <a class="nav-link" href="carrinho.php" title="Carrinho">
              <i class="bi bi-cart3 fs-5"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Conteúdo principal -->
  <main>
    <!-- Banner -->
    <section>
      <img src="imagens/banner.png" alt="Banner Vitoriano Sports" class="banner-img">
    </section>

    <!-- Boas-vindas -->
    <section class="container text-center my-5">
      <h1 class="mb-3 text-warning">Bem-vindo à Vitoriano Sports</h1>
      <p class="lead mb-4">Camisas de time com qualidade, autenticidade e muito estilo. Torça com a sua segunda pele!</p>
      <a href="produtos.php" class="btn btn-cinza-escuro btn-lg">Ver Produtos</a>
    </section>
    <!-- Destaques em Carrossel -->
<section class="container my-5">
  <h2 class="text-warning mb-4 text-center">Destaques da Semana</h2>
  <div id="carouselDestaques" class="carousel slide carousel-dark" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card bg-dark text-white border-0 shadow">
              <img src="imagens/flamengo.jpg" class="card-img-top" alt="Camisa 1">
              <div class="card-body text-center">
                <h5 class="card-title">Camisa Flamengo</h5>
                <p class="card-text">R$ 90,00</p>
                <a href="produtos.php?id=1" class="btn btn-cinza-escuro">Ver Produto</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card bg-dark text-white border-0 shadow">
              <img src="imagens/palmeiras.jpg" class="card-img-top" alt="Camisa 2">
              <div class="card-body text-center">
                <h5 class="card-title">Camisa Palmeiras</h5>
                <p class="card-text">R$ 90,00</p>
                <a href="produtos.php?id=2" class="btn btn-cinza-escuro">Ver Produto</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card bg-dark text-white border-0 shadow">
              <img src="imagens/barça.jpg" class="card-img-top" alt="Camisa 3">
              <div class="card-body text-center">
                <h5 class="card-title">Camisa Barcelona </h5>
                <p class="card-text">R$ 100,00</p>
                <a href="produtos.php?id=3" class="btn btn-cinza-escuro">Ver Produto</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="card bg-dark text-white border-0 shadow">
              <img src="imagens/real madri.jpg" class="card-img-top" alt="Camisa 4">
              <div class="card-body text-center">
                <h5 class="card-title">Camisa Real Madrid</h5>
                <p class="card-text">R$ 100,00</p>
                <a href="produtos.php?id=4" class="btn btn-cinza-escuro">Ver Produto</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestaques" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselDestaques" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</section>


    <!-- Sobre a loja com mapa -->
    <section class="container my-5 py-5 px-4 rounded-4 shadow" style="background: #1f1f1f;">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="mb-4 text-warning">Sobre a Vitoriano Sports</h2>
          <p style="font-size: 1.1rem; line-height: 1.7;">
            A <strong>Vitoriano Sports</strong> nasceu da paixão pelo futebol. Aqui você encontra camisas originais de clubes brasileiros e internacionais com qualidade e preço justo.
          </p>
          <p class="mb-3">Estamos sempre atualizando nosso catálogo com novidades, promoções e coleções exclusivas.</p>
          <p class="mb-0">
            <strong>Endereço:</strong><br>
            R. Caçanjure, 157 - Jardim Damasco<br>
            Campo Mourão - PR, 87306-130
          </p>
        </div>
        <div class="col-md-6">
          <div class="ratio ratio-4x3 rounded-3 shadow">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.3821512463813!2d-52.36991732483954!3d-23.61268176382194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd0f7c31cb395%3A0x4bde8050b1d429ff!2sR.%20Ca%C3%A7anjure%2C%20157%20-%20Jardim%20Damasco%2C%20Campo%20Mour%C3%A3o%20-%20PR%2C%2087306-130!5e0!3m2!1spt-BR!2sbr!4v1719174904804!5m2!1spt-BR!2sbr"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Rodapé -->
  <footer class="text-white text-center text-lg-start mt-auto">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase text-warning">Vitoriano Sports</h5>
          <p>Camisas de time com qualidade e estilo. Nosso compromisso é com sua paixão pelo futebol!</p>
        </div>

        <div class="col-lg-3 mb-4 mb-lg-0">
          <h5 class="text-uppercase text-warning">Contato</h5>
          <ul class="list-unstyled">
            <li>Email: <a href="mailto:paulokondazeski043@gmail.com" class="text-white">paulokondazeski043@gmail.com</a></li>
            <li>Telefone: <a href="tel:+5544998657175" class="text-white">(44) 99865-7175</a></li>
            <li>Instagram: <a href="https://instagram.com/vitorianosports" target="_blank" class="text-white">@vitorianosports</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="text-center p-3 bg-secondary">
      &copy; 2025 Vitoriano Sports - Todos os direitos reservados
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
