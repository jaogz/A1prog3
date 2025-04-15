<?php
require_once 'classes/Sessao.php';

Sessao::iniciar();
$usuario = Sessao::get('usuario');
if (!$usuario) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
<h2>Bem-vindo, <?php echo $usuario->getNome(); ?>!</h2>
<p>Seu e-mail é: <?php echo $_COOKIE['lembrar_email'] ?? 'Não salvo'; ?></p>
<a href="logout.php">Sair</a>
</body>
</html>
