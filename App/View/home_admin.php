<?php
  session_start();
  $usuario = $_SESSION["usuario_admin"];
  require_once './assets/components/header_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/style.auth.css">
  <title>Administrador</title>
</head>
<body>
  <section class="area-configs">
    <div class="area-container">
      <div>
        <h1>Usuários</h1>
        <a href="./usuarios_admin.php">Mostrar</a>
      </div>

      <div>
        <h1>Posts</h1>
        <a href="./admin_posts.php">Mostrar</a>
      </div>

      <div>
        <h1>Minha conta</h1>
        <a href="./user_conta.php">Mostrar</a>
      </div>
    </div>
  </section>
</body>
</html>