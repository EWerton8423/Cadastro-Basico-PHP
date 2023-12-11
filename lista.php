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
        }
    </style>
</head>

<!--Colocando os dados dentro do formulario-->
<body>
    <div class="container">
        <h2 class="text-center mt-3">Lista de Cadastro</h2>

        <!--php usado para colocar as funcoes da listagem 
        Colocando os dados da tabela dentro da tabela -->
        <?php
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        $result_usuarios = "SELECT * FROM usuarios";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            echo "ID: " . $row_usuario['id'] . "<br>";
            echo "Nome: " . $row_usuario['nome'] . "<br>";
            echo "E-mail: " . $row_usuario['email'] . "<br><hr>" ;
        }
        ?>
    </div>

</body>

</html>