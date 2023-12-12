<?php 
session_start();
include_once("conexao.php");

//Fazendo o procedimento de delete do formulario
$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>