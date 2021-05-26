<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.index.css">
  <title>Cadastrar</title>
</head>
<body>
  <?php require_once './assets/components/header.php'; ?>
    <form class="form" action="./resolve_cadastro.php" method="POST">
      <label data-opacity="0">Nome</label>
      <input type="name" name="name" id="name" data-opacity="0" required>
      <label data-opacity="0">Email</label>
      <input type="email" name="email" id="email" data-opacity="0" required>
      <label data-opacity="0">Senha</label>
      <input type="password" name="password" id="password" data-opacity="0" required>
      <button type="submit" data-opacity="0">entrar</button>
    </form>

    <script src="./assets/script/script.js"></script>
</body>
</html>