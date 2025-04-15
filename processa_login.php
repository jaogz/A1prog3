<?php
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = $_POST['senha'];

$usuario = Autenticador::login($email, $senha);
if ($usuario) {
    Sessao::set('usuario', $usuario);
    if (!empty($_POST['lembrar'])) {
        setcookie("email", $email, time() + 3600);
    }
    header("Location: dashboard.php");
} else {
    echo "Credenciais inválidas.";
}