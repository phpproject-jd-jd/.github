<?php

require_once 'router.php';
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
    default:
        $controller->index();
        break;
}
