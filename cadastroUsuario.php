<?php
include 'servidor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nasc = $_POST['data_nascimento'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];

    $sql = "INSERT INTO candidato (nome, cpf, email, senha, data_nasc, estado, cidade) 
            VALUES ('$nome', '$cpf', '$email', '$senha', '$data_nasc', '$estado', '$cidade')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Cadastro.css">
    <style>
        body {
            background-image: url('imagem_logo.jpg'); /* Substitua pelo caminho correto da imagem */
            background-size: cover;
            background-position: center;
        }
    </style>
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

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card border-0 p-5 rounded shadow col-md-6 bg-secondary text-white">
            <h2 class="text-center text-white">Cadastro de Usuário</h2>
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="senha" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="data-nascimento" class="form-label">Data de Nascimento:</label>
                    <input type="date" id="data-nascimento" name="data_nascimento" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <select id="estado" name="estado" class="form-select" required>
                        <option value="" disabled selected>Selecione seu estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
