<?php
echo "<pre>";
require_once __DIR__ . "/vendor/autoload.php";

use app\controllers\HomeController;
use app\core\Application;
use \app\controllers\ContactController;
$app = new Application();

$app->router
->get("/", [HomeController::class, "index"])
->get("/contact", [ContactController::class, "index"])
->get("/contact/create", [ContactController::class, "create"])
->post("/contact/store", [ContactController::class, "store"]);
//run
try {
    $app->run($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);
}catch (Exception $ex) {
    echo $ex->getMessage();
}

echo "</pre>";
