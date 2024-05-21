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

    // Verifica se o nome de usuário já está em uso
    $sql = "SELECT id FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        echo "Nome de usuário já está em uso.";
    } else {
        // Insere o novo usuário no banco de dados
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        if($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso.";
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussão - Perfil</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Fórum de Discussão</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="discussion.php">Discussão</a></li>
                <li><a href="profile.php">Perfil</a></li>
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
    
    <form action="" method="post">
        <h2>Cadastro</h2>
        <div class="campo">
            <label>Nome de Usuário</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login aqui</a>.</p>
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
