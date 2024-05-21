<?php
if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
} else {
    $id = "Não fornecido";
}

session_start();
include_once 'config.php';

if(!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer_text = $_POST['answer_text'];
    $question_id = $_POST['question_id'];
    $userId = $id;

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
    
    <section class="content">
    
    <form action="" method="post">
    <h2>Responder Pergunta</h2>
        <div>
            <label for="question_id">ID da Pergunta:</label>
            <input readonly type="text" name="question_id" value="<?php echo $id ?>">
        </div>
        <div>
            <label for="answer_text">Resposta:</label>
            <textarea name="answer_text" required autofocus></textarea>
        </div>
        <div>
            <input type="submit" value="Enviar Resposta">
        </div>
    </form>
    <p><a href="index.php">Voltar para a Página Inicial</a></p>
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
