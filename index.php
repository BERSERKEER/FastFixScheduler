<?php
$controller = isset($_GET['controller']) ? strtolower($_GET['controller']) : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = __DIR__ . "/app/controllers/" . ucfirst($controller) . "Controller.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . "Controller";

    if (class_exists($controllerClass)) {
        $controllerObj = new $controllerClass();

        if (method_exists($controllerObj, $action)) {
            $controllerObj->$action();
        } else {
            die("❌ Error: Acción '{$action}' no encontrada en el controlador '{$controllerClass}'.");
        }
    } else {
        die("❌ Error: Clase del controlador '{$controllerClass}' no encontrada.");
    }
} else {
    die("❌ Error: Controlador '{$controller}' no encontrado.");
}
exit();
