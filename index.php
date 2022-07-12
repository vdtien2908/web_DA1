<?php

session_start();
require './Core/Database.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';


$controllerName = ucfirst(strtolower(($_REQUEST['controller'] ?? 'Error')) . 'Controller');
$actionName = $_REQUEST['action'] ?? 'index';
if (empty($_SESSION['login'])) {
    $controllerName = 'LoginController';
    // header("Location: ?controller=login");
} else {
    if ($controllerName == 'LoginController') {
        header("Location: ?controller=home");
    }
}




require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName();
$controllerObject->$actionName();