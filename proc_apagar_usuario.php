<!-- FAZENDO O FORMULARIO DE DELETE -->
<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//Fazendo o redirecionamento do delete 
if (mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color: green'>Usuário deletado com sucesso</p>";
    header("Location:lista.php");
} else {
    $_SESSION['msg'] = "<p style='color: red'>Erro ao deletar o Usuário</p>";
    header("Location:lista.php");
}
?>