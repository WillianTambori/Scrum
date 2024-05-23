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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussão - Página Inicial</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Fórum de Discussão</h1>
        <nav>
            <ul>
            <li class="active"><a href="index.php">Início</a></li>
                <li><a href="discussion.php">Discussão</a></li>
                <li><a href="profile.php">Perfil</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content centraliza">
        <h2>Bem-vindo ao Fórum de Discussão!</h2>
        <p>Este é um fórum dedicado à discussão do nosso tema principal.</p>
        
        
        <?php if(empty($answeredQuestions)): ?>
        <p>Você ainda não respondeu a nenhuma pergunta.</p>
    <?php else: ?>
        <h2>Perguntas respondidas por você</h2>
        <ul>
            <?php foreach($answeredQuestions as $question): ?>
                <hr>
                <li>
                    <p><strong>Pergunta:</strong> <?php echo $question['question_text']; ?></p>
                    <p><strong>Resposta:</strong> <?php echo $question['answer_text']; ?></p>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
