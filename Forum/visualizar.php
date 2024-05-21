<?php
session_start();
include_once 'config.php';

if(!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

// Consulta perguntas não respondidas
$sql = "SELECT * FROM questions WHERE id NOT IN (SELECT question_id FROM answers)";
$result = $conn->query($sql);
$unansweredQuestions = [];

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $unansweredQuestions[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perguntas Não Respondidas</title>
</head>
<body>
    <h2>Perguntas Não Respondidas</h2>
    <ul>
        <?php foreach($unansweredQuestions as $question): ?>
            <li>
                <strong>ID:</strong> <?php echo $question['id']; ?> - <?php echo $question['question_text']; ?>
                <a href="respostas.php?id=<?php echo $question['id']; ?>">Responder</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="index.php">Voltar para a Página Inicial</a></p>
</body>
</html>
