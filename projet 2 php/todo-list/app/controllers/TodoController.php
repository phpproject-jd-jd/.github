<?php

require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        $todos = $this->model->getAllTodos();
        require 'views/todo-list.php';
    }

    public function show($id) {
        $todo = $this->model->getTodoById($id);
        require 'views/todo-details.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $this->model->createTodo($title, $description);
            header('Location: index.php');
        } else {
            require 'views/create-todo.php';
        }
    }

    public function update($id, $title, $description) {
        $this->model->updateTodo($id, $title, $description);
        header('Location: index.php');
    }
}
