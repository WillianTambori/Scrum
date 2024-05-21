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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussão - Discussão</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Fórum de Discussão</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li class="active"><a href="discussion.php">Discussão</a></li>
                <li><a href="profile.php">Perfil</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
                <li><a href="inc/logout.php">Logout</a></li>
            </ul>
        
        </nav>
    </header>
    
    <section class="content centraliza">
        
    <h2>Perguntas Não Respondidas</h2>
    <ul>
        <?php foreach($unansweredQuestions as $question): ?>
            <li class="perguntas">
                <strong>ID:</strong> <?php echo $question['id']; ?> - <?php echo $question['question_text']; ?>
                <a href="respostas.php?id=<?php echo $question['id']; ?>">Responder</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="index.php">Voltar para a Página Inicial</a></p>
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
