<?php
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$controllerClass = ucfirst($controller) . 'Controller';
require_once "controllers/$controllerClass.php";

$instance = new $controllerClass();
if (method_exists($instance, $action)) {
    $instance->$action($_GET['id'] ?? null);
} else {
    echo "Action không tồn tại.";
}