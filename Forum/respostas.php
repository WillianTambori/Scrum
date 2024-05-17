<?php
session_start();
include_once 'config.php';

if(!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer_text = $_POST['answer_text'];
    $question_id = $_POST['question_id'];
    $userId = $_SESSION['userId'];

    // Insere a resposta no banco de dados
    $sql = "INSERT INTO answers (user_id, question_id, answer_text) VALUES ('$userId', '$question_id', '$answer_text')";
    if($conn->query($sql) === TRUE) {
        echo "Resposta enviada com sucesso.";
    } else {
        echo "Erro ao enviar resposta: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Responder Pergunta</title>
</head>
<body>
    <h2>Responder Pergunta</h2>
    <form action="" method="post">
        <div>
            <label for="question_id">ID da Pergunta:</label>
            <input type="text" name="question_id" required>
        </div>
        <div>
            <label for="answer_text">Resposta:</label>
            <textarea name="answer_text" required></textarea>
        </div>
        <div>
            <input type="submit" value="Enviar Resposta">
        </div>
    </form>
    <p><a href="index.php">Voltar para a Página Inicial</a></p>
</body>
</html>
