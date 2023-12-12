<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>

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
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-space-between">
        <a class="navbar-brand">Sistema de Cadastros</a>
        <div>
            <button onclick="voltar()" class="btn btn-sm btn-outline-secondary">Voltar</button>
            <button onclick="salvarAlteracoes('edicao')" class="btn btn-sm btn-primary">Salvar Alterações</button>
            &nbsp;&nbsp;
            <button onclick="salvarAlteracoes()" class="btn btn-sm btn-primary">Salvar Alterações</button>
            </div>
            </nav>
            <!-- Container Principal -->
            <div class="container">
                <!-- Formulário para edição dos cadastros -->
                <form method="post" action="lista.php">
</body>