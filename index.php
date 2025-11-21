<?php
require_once 'controllers/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? null;

switch ($action) {
    case 'add':
        $controller->add($_POST['task']);
        break;

    case 'complete':
        $controller->markAsCompleted($_GET['id']);
        break;

    case 'delete':
        $controller->delete($_GET['id']);
        break;
}

$todos = $controller->index();
require 'views/listTodos.php';
