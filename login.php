<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'cafeteria_db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Verifica a senha utilizando password_verify()
        if (password_verify($password, $row['senha'])) {
            $_SESSION['user_id'] = $row['id']; // Armazene o ID do usuário na sessão, se desejar
            header("Location: cardapio.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Senha incorreta. Tente novamente.";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Credenciais incorretas. Tente novamente.";
        header("Location: index.php");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
