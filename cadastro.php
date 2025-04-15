<!DOCTYPE html>
<html>
<head><title>Cadastro</title></head>
<body>
<h2>Cadastro de Usuário</h2>
<form action="processa_cadastro.php" method="POST">
    Nome: <input type="text" name="nome" required><br>
    E-mail: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>
