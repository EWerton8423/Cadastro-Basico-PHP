<!-- Onde e colocado os dados do banco de dados selecionado -->
<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Cadastro</title>
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

<!--Colocando os dados dentro do formulario-->

<body>
    <div class="container">
        <!-- Colocando o link para voltar para o inicio do programa -->
        <div class="container">
            <a class="btn btn-primary mb-3" href="index.php" role="button">Cadastrar Usuario</a>
            <a class="btn btn-primary mb-3" href="lista.php" role="button">Lista de Cadastro</a>
        </div>

        <h2 class="text-center mt-3">Lista de Cadastro</h2>

        <!--php usado para colocar as funcoes da listagem 
        Colocando os dados da tabela dentro da tabela -->
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        //Recebe o cadastro que está o id 
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //Mostra a quantidade de cadastro na pagina
        $qnt_result_pg = 3;

        //Calcular o inicio
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        $result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
            echo "ID: " . $row_usuario['id'] . "<br>";
            echo "Nome: " . $row_usuario['nome'] . "<br>";
            echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
            //Botão de edit 
            echo "<a class='btn btn-primary' href='edit_usuario.php?id=" . $row_usuario['id'] ."'role='button'>Editar</a>" . "<br/><hr>";
        }

        //Paginacao - Mostra o total de cadastro de usuarios
        $result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
        $resultado_pg = mysqli_query($conn, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo "Total: " . $row_pg['num_result'];

        //Quantidade de pagina 
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

        //Limitar o maximo de paginas
        $max_links = 2;
        echo "<nav aria-label='Page navigation example'>";
        echo "<ul class='pagination justify-content-center'>";

        //Exibindo o resto das paginas cadastradas
        for ($i = 1; $i <= $quantidade_pg; $i++) {
            $destaque = ($pagina == $i) ? 'class="page-item disabled"' : '';
            echo "<li $destaque class='page-item'><a href='?pagina=$i' class='page-link'>
                $i </a></li>";
        }

        ?>
    </div>

</body>

</html>