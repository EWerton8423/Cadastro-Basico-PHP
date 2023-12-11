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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #formulario {
            margin-top: 3%;
            width: 60%;
            float: right;
        }
    </style>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="valida.js"></script>
</head>

<body>
    <h2>Cadastrar Usuário</h2>
    <?php
    if (isset($_SESSION['msg']))
        echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>
    <form method="POST" action="processa.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
        <br><br>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite um e-mail válido">
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>