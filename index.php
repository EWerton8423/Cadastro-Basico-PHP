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
<body>
    <div class="container">

        
    <!-- Colocando o link para voltar para o inicio do programa -->
    <a href="index.php?acao=voltar&id=" class="btnbtn-primary mb-3">Cadastrar</a>
    <a href="lista.php?acao=voltar&id=" class="btnbtn-primary mb-3">Listar</a>

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
</body>

</html>