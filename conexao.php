<?php 
//Colocando as conexoes do banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "estudo_php";

//Criar conexao com o banco
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>