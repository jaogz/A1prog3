<?php
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];

$usuario = Autenticador::logar($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);
    if (isset($_POST['lembrar'])) {
        setcookie('lembrar_email', $email, time() + 86400 * 30, "/");
    }
    header('Location: dashboard.php');
} else {
    echo 'E-mail ou senha inválidos.';
}
