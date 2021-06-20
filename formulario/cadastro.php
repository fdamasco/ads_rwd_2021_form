<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

if(empty($nome)) {
    $nome_erro = "Por favor, insira um nome de usuário!";
} elseif(strlen($nome) < 6) {
    $nome_erro = "Seu nome de usuário deve ter no mínimo 6 letras ou números. Tente novamente!";
}

if(empty($email)) {
    $email_erro = "Por favor, insira seu e-mail!";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_erro = "Por favor, insira um e-mail válido!";
}

if(empty($telefone)) {
    $telefone_erro = "Por favor, insira seu número de telefone!";
} elseif (!is_numeric($telefone)) {
    $telefone_erro = "Por favor, insira um número de telefone válido!";
}

if(empty($senha)) {
    $telefone_erro = "Por favor, insira uma senha!";
} elseif (strlen($senha) < 8) {
    $senha_erro = "A senha deve ter no mínimo 8 caracteres. Tente novamente!";
}


if(empty($nome_erro) && empty($email_erro) && empty($telefone_erro) && empty($senha_erro)) {
    include("sucesso.php");
} else {
    include("index.php");
}

?>