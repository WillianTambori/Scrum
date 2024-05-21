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
        <!-- Adicione mais conteúdo aqui conforme necessário -->
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
