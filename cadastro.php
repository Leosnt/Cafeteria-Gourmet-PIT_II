<?php
// Verifica se foi recebido um POST do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['senha'])) {
    // Conecta ao banco de dados (substitua os valores conforme suas credenciais)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cafeteria_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?cadastro=success");
        exit();
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    $conn->close();
}
?>
