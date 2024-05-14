<?php
require_once 'models/PostModel.php'; // Inclua o arquivo do modelo

class PostController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postModel = new PostModel();
            $postModel->createPost($_POST);
            header('Location: /forum');
        } else {
            require 'views/post/create.php';
        }
    }

    public function show($id) {
        $postModel = new PostModel();
        $post = $postModel->getPostById($id);
        require 'views/post/show.php';
    }
}
?>
