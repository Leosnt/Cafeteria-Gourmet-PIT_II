<?php
$host = "localhost"; // Host do banco de dados
$dbname = "cafeteria_db"; // Nome do seu banco de dados
$username = "root"; // Seu nome de usuário do banco de dados
$password = ""; // Sua senha do banco de dados

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
