<?php
// Configurações do Banco de Dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'forum';

// Conexão com o Banco de Dados
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>