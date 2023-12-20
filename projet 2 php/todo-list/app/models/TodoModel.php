<?php

require_once 'config.php';

class TodoModel {
    private $conn;

    public function __construct() {
        $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllTodos() {
        $stmt = $this->conn->query("SELECT * FROM todos");
        $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $todos;
    }

    public function getTodoById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM todos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $todo = $stmt->fetch(PDO::FETCH_ASSOC);
        return $todo;
    }

    public function createTodo($title, $description) {
        $stmt = $this->conn->prepare("INSERT INTO todos (title, description) VALUES (:title, :description)");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->execute();
        }

    public function updateTodo($id, $title, $description) {
        $stmt = $this->conn->prepare("UPDATE todos SET title = :title, description = :description WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->execute();
    }
}
