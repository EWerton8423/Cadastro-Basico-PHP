<?php 

if(isset($_POST['email'])&& !empty($_POST['email'])){

$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])

$to = "ewerton@gmail.com";
$subject = "Contato do Site Br";
$body = "Nome: $nome\nEmail: $email\nMensagem:\n$_POST[message]";

}

?>