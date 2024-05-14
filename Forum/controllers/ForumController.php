<?php
require_once 'models/ForumModel.php'; // Inclua o arquivo do modelo

class ForumController {
    public function index() {
        $forumModel = new ForumModel();
        $forums = $forumModel->getAllForums();
        require 'views/forum/index.php';
    }

    public function show($id) {
        $forumModel = new ForumModel();
        $forum = $forumModel->getForumById($id);
        require 'views/forum/show.php';
    }
}
?>
