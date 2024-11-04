<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SOS Emprego</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="postEmpresa.php">Postar Vaga</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card p-4 shadow-sm">
              <h2 class="card-title text-center mb-4 text-primary">Postar Vaga</h2>
              <form class="row g-3">
                <div class="col-md-12">
                  <label for="nomeVaga" class="form-label">Título da Vaga</label>
                  <input type="text" class="form-control" id="nomeVaga" required>
                </div>
                <div class="col-md-12">
                  <label for="descricao" class="form-label">Descrição da Vaga</label>
                  <textarea class="form-control" id="descricao" rows="4" required></textarea>
                </div>
                <div class="col-md-12">
                  <label for="requisitos" class="form-label">Requisitos</label>
                  <textarea class="form-control" id="requisitos" rows="4" required></textarea>
                </div>
                <div class="col-md-12">
                  <label for="beneficios" class="form-label">Benefícios</label>
                  <textarea class="form-control" id="beneficios" rows="4" required></textarea>
                </div>
                <div class="col-md-6">
                  <label for="localizacao" class="form-label">Localização</label>
                  <input type="text" class="form-control" id="localizacao" required>
                </div>
                <div class="col-md-6">
                  <label for="salario" class="form-label">Salário</label>
                  <input type="text" class="form-control" id="salario" required>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100">Publicar Vaga</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      