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
</head>

<body>
    <h2>Cadastrar Usuário</h2>

    <?php
    if (isset($_SESSION['msg']))
        echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>

    <form>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="nome" class="form-control" id="nome" aria-describedby="nome">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>