document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    // Aqui você pode adicionar lógica de autenticação, por exemplo, verificar em um banco de dados
    if (username === "admin" && password === "admin") {
        window.location.href = "admin.php";
    } else if (username === "user" && password === "user") {
        window.location.href = "/";
    } else {
        document.getElementById("loginMessage").innerText = "Usuário ou senha incorretos.";
    }
});
