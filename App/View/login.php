<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.index.css">
  <title>Login</title>
</head>
<body>
  <?php require_once './assets/components/header.php'; ?>
  <form class="form" action="./resolve_login.php" method="POST">
    <label>Email</label>
    <input type="email" name="email" id="email" required>
    <label>Senha</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">entrar</button>
    <p>Não é cadastrado ? Basta clicar <a href="./form.php">AQUI</a></p>
  </form>
</body>
</html>