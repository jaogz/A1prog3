<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();
$usuario = Sessao::get('usuario');
if (!$usuario) {
    header("Location: login.php");
    exit;
}
echo "Bem-vindo, " . $usuario->getNome() . "!<br>";
echo "Seu e-mail: " . ($_COOKIE['email'] ?? 'não salvo') . "<br>";
echo '<a href="logout.php">Sair</a>';