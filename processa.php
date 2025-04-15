<?php
session_start();

// Validação básica
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$nome || !$email || !$senha) {
    die("Dados inválidos.");
}

// Armazenar na sessão e cookie
$_SESSION['usuario'] = $nome;
setcookie("email", $email, time() + 3600);

header("Location: welcome.php");
exit;
?>