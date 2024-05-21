<?php
session_start();
include_once 'config.php';

if(!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

// Consulta dados do usuário
$userId = $_SESSION['userId'];
$sql = "SELECT username FROM users WHERE id = '$userId'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
} else {
    // Caso o usuário não seja encontrado (situação incomum)
    header("Location: logout.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
</head>
<body>
    <h2>Bem-vindo à Página Inicial</h2>
    <p>Olá, <?php echo $username; ?>!</p>
    <p><a href="perguntas.php">Realizar Pergunta</a></p>
    <!-- <p><a href="respostas.php">Responder Pergunta</a></p> -->
    <p><a href="visualizar.php">Visualizar Perguntas Não Respondidas</a></p>
    <p><a href="perguntas_respondidas.php">Visualizar Perguntas Respondidas</a></p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>
