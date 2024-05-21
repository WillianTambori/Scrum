<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussão - Gerenciamento</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Fórum de Discussão - Gerenciamento</h1>
        <nav>
            <ul>
            <li><a href="index.php">Início</a></li>
                <li><a href="discussion.php">Discussão</a></li>
                <li class="active"><a href="admin.php">Administração</a></li>
                <li><a href="profile.php">Perfil</a></li>
                <li><a href="inc/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
        <h2>Gerenciamento de Posts</h2>
        <!-- Lista de posts com opções de exclusão para o administrador -->
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
