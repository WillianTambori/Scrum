<?php
class ForumModel {
    private $db;

    public function __construct() {
        // Configure a conexão com o banco de dados
        $this->db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllForums() {
        // Executa a query para obter todos os fóruns
        $stmt = $this->db->query('SELECT * FROM forums');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getForumById($id) {
        // Executa a query para obter um fórum específico pelo ID
        $stmt = $this->db->prepare('SELECT * FROM forums WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
