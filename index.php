<?php
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cafeteria Online</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
</head>
<body>
  <div id="login-container">
  <?php
      session_start();
      if (isset($_SESSION['login_error'])) {
        echo '<p class="msg-error">' . $_SESSION['login_error'] . '</p>';
        unset($_SESSION['login_error']);
      }
      ?>
    <div class="icons-login">
        <i class="fa fa-coffee fa-3x" aria-hidden="true"></i>
        <p class="text-entry login icon">Cafeteria Gourmet</p>
    </div>

    <form id="login-form" action="login.php" method="POST" onsubmit="return loginUser()">
      <h3>Login</h3>
      <p class="text-entry login">Olá, que bom ver você novamente!.</p>
      <div class="input-group">
        <label for="username">Usuário/E-mail</label>
        <input type="text" id="username" name="username" >
      </div>
      <div class="input-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" >
      </div>
      <div class="buttons-login">
        <button class="submit" type="submit">Entrar</button>
        <p id="login-error" class="error-message"></p>
        <p class="text-entry">Ainda não tem conta?</p>
      </div>
    </form>
    <div class="buttons-login cad">
    <a href="cadastrar.php" class="button-cad">Cadastrar</button>
    </div>
<script src="script.js"></script>
</body>
</html>




