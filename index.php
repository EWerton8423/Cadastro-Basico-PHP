<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Basico</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Colocando o estilo do formulario -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>

<!-- Fazendo o formulario do projeto -->
<!-- Colocando os dados do formulario -->

<!-- Colocando o link para voltar para o inicio do programa -->
<!-- <div class="container">
    <a class="btn btn-primary mb-3" href="index.php" role="button">Cadastrar Usuario</a>
    <a class="btn btn-primary mb-3" href="lista.php" role="button">Lista de Cadastro</a>
</div> -->

<form method="POST" action="processa.php">

    <body>
        <!--Fazendo o menu do projeto no dia 22/12/2023-->
        <header>
            <nav>
                <a class="logo" href="/">Cadastro de Usuario</a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="#cadastro">Cadastro</a></li>
                    <li><a href="#lista">Lista</a></li>
                    <li><a href="#voltar">Voltar</a></li>
                </ul>
            </nav>
        </header>

        <!-- Onde vai ficar a secao do cadastro -->
        <div class="container">
            <h2 class="text-center mt-3">Cadastro Básico</h2>
            <form method="post" action="lista.php">
                <input type="hidden" name="acao" value="cadastrar">

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required class="form-control" placeholder="Insira seu nome">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required class="form-control" placeholder="exemplo@email.com">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

        </div>
</form>
<main>
    <script src="mobile-navbar.js"></script>
</main>
</body>

</html>