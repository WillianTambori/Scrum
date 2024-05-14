<!DOCTYPE html>
<html>
<head>
    <title>Criar Novo Post</title>
</head>
<body>
    <h1>Criar Novo Post</h1>
    <form action="/post/create.php" method="POST">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Conteúdo:</label>
        <textarea id="content" name="content" required></textarea>
        <br>
        <label for="forum_id">ID do Fórum:</label>
        <input type="text" id="forum_id" name="forum_id" required>
        <br>
        <button type="submit">Criar</button>
    </form>
</body>
</html>
