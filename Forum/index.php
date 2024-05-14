<?php
// Função de autoloading para carregar automaticamente as classes
spl_autoload_register(function ($class_name) {
    if (file_exists('controllers/' . $class_name . '.php')) {
        require_once 'controllers/' . $class_name . '.php';
    } elseif (file_exists('models/' . $class_name . '.php')) {
        require_once 'models/' . $class_name . '.php';
    }
});

// Roteamento básico
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'] . 'Controller';
    $action = $_GET['action'];
} else {
    $controller = 'ForumController';
    $action = 'index';
}

$controllerInstance = new $controller();

if (isset($_GET['id'])) {
    $controllerInstance->$action($_GET['id']);
} else {
    $controllerInstance->$action();
}
?>
