<?php

// Ambil controller & action dari URL
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'department';
$action     = isset($_GET['action']) ? $_GET['action'] : 'index';

// Format nama controller file + class
$controllerFile = "controllers/" . ucfirst($controller) . "Controller.php";
$controllerClass = ucfirst($controller) . "Controller";

// Cek file controller ada atau tidak
if (!file_exists($controllerFile)) {
    die("Controller file tidak ditemukan: $controllerFile");
}

require_once $controllerFile;

// Cek class controller ada
if (!class_exists($controllerClass)) {
    die("Class controller tidak ditemukan: $controllerClass");
}

$controllerObj = new $controllerClass();

// Cek method (action) ada
if (!method_exists($controllerObj, $action)) {
    die("Method '$action' tidak ada di controller '$controllerClass'");
}

// Automatis load header
include "views/templates/header.php";

// Jalankan controller->action()
$controllerObj->$action();

// Automatis load footer
include "views/templates/footer.php";
