
    <header>
        <h1>Fórum de Discussão</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="discussion.php">Discussão</a></li>
                <li><a href="profile.php">Perfil</a></li>
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
                <li><a href="inc/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
    
    <form action="index.php?class=Usuario&acao=post" method="post">
        <h2>Cadastro</h2>
        <div class="campo">
            <label>Nome de Usuário</label>
            <input type="text" name="param[0]" required>
        </div>
        <div>
            <label>Idade</label>
            <input type="number" name="param[1]" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="param[2]" required>
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="param[3]" required>
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
    <p>Já tem uma conta? <a href="index.php?class=Usuario&acao=getAll">Faça login aqui</a>.</p>
    </section>