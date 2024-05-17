<?php
session_start();
include_once 'config.php';

if(!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

// Consulta perguntas respondidas pelo usuário
$userId = $_SESSION['userId'];
$sql = "SELECT q.id, q.question_text, a.answer_text
        FROM questions q
        INNER JOIN answers a ON q.id = a.question_id
        WHERE a.user_id = '$userId'";
$result = $conn->query($sql);
$answeredQuestions = [];

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $answeredQuestions[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perguntas Respondidas</title>
</head>
<body>
    <h2>Perguntas Respondidas</h2>
    <?php if(empty($answeredQuestions)): ?>
        <p>Você ainda não respondeu a nenhuma pergunta.</p>
    <?php else: ?>
        <ul>
            <?php foreach($answeredQuestions as $question): ?>
                <li>
                    <p><strong>Pergunta:</strong> <?php echo $question['question_text']; ?></p>
                    <p><strong>Resposta:</strong> <?php echo $question['answer_text']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <p><a href="index.php">Voltar para a Página Inicial</a></p>
</body>
</html>
