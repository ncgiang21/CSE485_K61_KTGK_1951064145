<?php
session_start();

// http://localhost/Project/index.php?controller=manage&action=addd

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'manage';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// echo $action;

$controller = ucfirst($controller);
$fileController = $controller . "Controller.php";

$pathController = "src/controller/$fileController";

if (!file_exists($pathController)) {
    die("Trang bạn tìm không tồn tại");
}

require_once "$pathController";

$classController = $controller."Controller";

$object = new $classController();

if (!method_exists($object, $action)) {
    die("Phương thức $action
     không tồn tại trong class $classController");
}
    $object->$action();
?>