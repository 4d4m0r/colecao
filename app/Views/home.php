<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coleção</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand"  href="<?php echo base_url('/') ?>">Fungos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('login') ?>">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="banner">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <h1>Bem-vindo ao mundo dos fungos</h1>
          <p>Aqui você encontra informações sobre diversos tipos de fungos, sua classificação, habitat, importância para o meio ambiente e para a saúde humana.</p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500x300" alt="imagem de fungos" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
</body>