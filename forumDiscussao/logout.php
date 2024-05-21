

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussão - Logout</title>
    <link rel="stylesheet" href="css/styles.css">

    <script>
        function startCountdown() {
            var countdownElement = document.getElementById('countdown');
            var timeLeft = 10;

            var countdownInterval = setInterval(function() {
                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    window.location.href = 'index.php';
                } else {
                    countdownElement.innerHTML = timeLeft;
                    timeLeft -= 1;
                }
            }, 1000);
        }

        window.onload = function() {
            startCountdown();
        };
    </script>
</head>
<body>
    <header>
        <h1>Fórum de Discussão</h1>
    </header>
    
    <section class="content centraliza">
        <h2 id="loginMessage">Você saiu com sucesso!</h2>
        <p><a href="login.php">Clique aqui</a> para fazer login novamente.</p>
    </section>

    <section class="content">
        <p>Você será redirecionado para a página inicial em <span id="countdown">10</span> segundos.</p>
    </section>

    <?php
        include("inc/footer.php");
    ?>
</body>
</html>
