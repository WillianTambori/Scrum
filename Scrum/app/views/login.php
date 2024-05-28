<header>
        <h1>Fórum de Discussão</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="discussion.php">Discussão</a></li>
                <li><a href="profile.php">Perfil</a></li>
                <li class="index.php?class=Usuario&acao=getAll"><a href="login.php">Login</a></li>
                <li><a href="index.php?class=Usuario&acao=post">Cadastrar</a></li>
                <li><a href="inc/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
    
    <form action="index.php?class=Usuario&acao=login" method="post">
    <h2>Login</h2>    
        <div>
            <label>Usuário</label>
            <input type="text" name="param[0]" required>
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="param[1]" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
    <p>Ainda não tem uma conta? <a href="index.php?class=Usuario&acao=post">Cadastre-se aqui</a>.</p>
    </section>

    <script src="js/script.js"></script>
