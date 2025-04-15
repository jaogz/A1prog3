<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h2>Formulário de Login</h2>
  <form method="post" action="processa.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required
      value="<?php echo isset($_COOKIE['email']) ? htmlspecialchars($_COOKIE['email']) : ''; ?>"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required><br><br>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>