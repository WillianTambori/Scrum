<?php
// Inicia a sessão se ainda não estiver iniciada
session_start();

// Destroi todas as variáveis de sessão
$_SESSION = array();

// Encerra a sessão
session_destroy();

// Redireciona para a página de login
header("Location: ../logout.php");
exit;
?>