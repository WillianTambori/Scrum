<?php
session_start();
include_once 'config.php';

if(isset($_SESSION['userId'])) {
    header("Location: index.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica as credenciais do usuário no banco de dados
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {
            // Credenciais corretas, inicia a sessão
            $_SESSION['userId'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: discussion.php");
            exit;
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussão - Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Fórum de Discussão</h1>
    </header>
    
    <section class="content">
    
    <form action="" method="post">
    <h2>Login</h2>    
        <div>
            <label>Usuário</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
    <p>Ainda não tem uma conta? <a href="cadastrar.php">Cadastre-se aqui</a>.</p>
    </section>

    <?php
        include("inc/footer.php");
    ?>

    <script src="js/script.js"></script>
</body>
</html>
