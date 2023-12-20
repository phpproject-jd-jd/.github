<?php

require_once 'app/controllers/TodoController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new TodoController();

switch ($action) {
    case 'show':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $controller->show($id);
        break;
    case 'create':
        $controller->create();
        break;
    case 'update':
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $controller->update($id, $title, $description);
        break;
    default:
        $controller->index();
        break;
}
