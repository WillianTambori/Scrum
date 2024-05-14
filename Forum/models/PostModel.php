<?php
class PostModel {
    public function createPost($data) {
        // Conecta ao banco de dados e insere um novo post
        // Exemplo de código fictício
        $db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
        $stmt = $db->prepare('INSERT INTO posts (title, content, forum_id) VALUES (?, ?, ?)');
        $stmt->execute([$data['title'], $data['content'], $data['forum_id']]);
    }

    public function getPostById($id) {
        // Conecta ao banco de dados e obtém o post pelo ID
        // Exemplo de código fictício
        $db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
        $stmt = $db->prepare('SELECT * FROM posts WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
