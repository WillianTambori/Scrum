<?php
session_start();
include_once 'config.php';

if(!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $question_text = $_POST['question_text'];
    $userId = $_SESSION['userId'];

    // Insere a pergunta no banco de dados
    $sql = "INSERT INTO questions (user_id, question_text) VALUES ('$userId', '$question_text')";
    if($conn->query($sql) === TRUE) {
        echo "Pergunta realizada com sucesso.";
    } else {
        echo "Erro ao realizar pergunta: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Realizar Pergunta</title>
</head>
<body>
    <h2>Realizar Pergunta</h2>
    <form action="" method="post">
        <div>
            <label>Pergunta</label>
            <textarea name="question_text" required></textarea>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <p><a href="index.php">Voltar para a Página Inicial</a></p>
</body>
</html>
