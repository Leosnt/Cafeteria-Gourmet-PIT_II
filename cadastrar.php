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

<div id="cadastro-form">
    <form id="signup-form" action="cadastro.php" method="POST" onsubmit="return cadastrarUsuario()">
    <div class="icons-login">
        <i class="fa fa-coffee fa-3x" aria-hidden="true"></i>
        <p class="text-entry login icon">Cafeteria Gourmet</p>
    </div>

    <h3>Cadastro de usuário</h3> 
    <div class="input-group">
        <label for="new-username">Usuário/E-mail:</label>
        <input type="text" id="new-username" name="email" required>
    </div>

    <div class="input-group">
        <label for="new-password">Senha:</label>
        <input type="password" id="new-password" name="senha" required>
    </div>

    <div class="input-group">
        <label for="new-password">Confirme sua senha:</label>
        <input type="password" id="new-password" name="new-password">
    </div>
    
    <div class="buttons-login">
        <button type="submit" onclick="enviarCadastro()">Cadastrar</button>
        <button class="button-cad" onclick="toggleCadastroForm()">Cancelar</button>
    </div>
    
    </form>
  </div>