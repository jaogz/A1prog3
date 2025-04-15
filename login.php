<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form action="processa_login.php" method="POST">
    E-mail: <input type="email" name="email" required value="<?php echo $_COOKIE['lembrar_email'] ?? ''; ?>"><br>
    Senha: <input type="password" name="senha" required><br>
    <label><input type="checkbox" name="lembrar"> Lembrar e-mail</label><br>
    <button type="submit">Entrar</button>
</form>
</body>
</html>
