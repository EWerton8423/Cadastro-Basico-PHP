<!-- Fazendo a conexao com o banco de dados -->
<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
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

<!-- Colocando o link para voltar para o inicio do programa -->
<div class="container">
    <a class="btn btn-primary mb-3" href="index.php" role="button">Voltar ao Início</a>
    <a class="btn btn-primary mb-3" href="lista.php" role="button">Lista de Cadastro</a>
</div>

<body>
    <div class="container">
        <!-- Formulário de edição -->
        <h2 class="text-center mt-3">Editar Usuario</h2>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <!-- Metodo onde vai ser salvo no banco de dados -->

        <form method="POST" action="proc_edit_usuario.php">
            <input type="hidden" name="acao" value="cadastrar">

            <!-- Colocando os dados dentro do formulario -->
            <div class="form-group">

                <!-- Codigo usado para mostrar o ID do usuario editado -->
                <input type="hidden" name="id" required class="form-control" value="<?= $row_usuario['id']?>">

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required class="form-control" value="<?= $row_usuario['nome']?>" placeholder="Insira seu nome">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required class="form-control" value="<?= $row_usuario['email']?>" placeholder="exemplo@email.com">
            </div>
            <button type="submit" class="btn btn-danger">Editar</button>

        </div>
    </form>

</body>