<!DOCTYPE html>
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
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="produtos.php">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre nós</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
           <li class="nav-item"> <a class="nav-link" href="carrinho.php" title="Carrinho">
    <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
  </a>
        </ul>
      </div>
    </div>
  </nav>
<!-- Adicione isso em uma página PHP, dentro do <body> -->
<!-- Certifique-se de que o Bootstrap está incluído no seu projeto -->

<section class="container my-5">
  <div class="row align-items-center">
    <!-- Texto da Loja -->
    <div class="col-md-6 mb-4 mb-md-0">
      <h2 class="mb-3">Sobre a Vitoriano Sports</h2>
      <p>
        A <strong>Vitoriano Sports</strong> é uma loja especializada em camisas de time nacionais e internacionais.
        Com paixão pelo futebol, oferecemos uma seleção de produtos de alta qualidade para quem vive o esporte intensamente.
        Torça, colecione ou presenteie com estilo e autenticidade.
      </p>
      <p class="mt-3">
        <strong>Endereço:</strong><br>
        R. Caçanjure, 157 - Jardim Damasco<br>
        Campo Mourão - PR, 87306-130
      </p>
    </div>

    <!-- Mapa da Localização -->
    <div class="col-md-6">
      <div class="ratio ratio-4x3 rounded shadow-sm">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.3821512463813!2d-52.36991732483954!3d-23.61268176382194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd0f7c31cb395%3A0x4bde8050b1d429ff!2sR.%20Ca%C3%A7anjure%2C%20157%20-%20Jardim%20Damasco%2C%20Campo%20Mour%C3%A3o%20-%20PR%2C%2087306-130!5e0!3m2!1spt-BR!2sbr!4v1719174904804!5m2!1spt-BR!2sbr" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>



    <div class="text-center p-3 bg-secondary">
      &copy; 2025 Vitoriano Sports - Todos os direitos reservados
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
