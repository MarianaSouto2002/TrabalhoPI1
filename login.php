<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="Login.css">
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
            <a class="nav-link text-white" aria-current="page" href="index.php">Feed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="card border-0" style="background-image: url('imagem_logo.jpg'); background-size: cover; background-position: 30% 30%; height: 740px;">
    <div class="container d-flex justify-content-center align-items-center min-vh-100 ">
      <div class="login-container p-5 rounded shadow col-md-6 ou col-lg-5 bg-dark text-white">
        <h1 class="text-center">Login</h1>
        <form action="#" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Usuário:</label>
            <input type="text" id="username" name="username" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" id="password" name="password" class="form-control" required>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="cadastro.php" class="link-secondary">Não tem cadastro ainda?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>