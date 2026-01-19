<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controller\AuthController;
use App\Controller\UserController;
use App\models\user;

$router = Router::getRouter();

$router->get('', fn() => 'Home');
$router->get('user/{name}/{id}', fn($name, $id) => 'Welcome ' .$name. ' Your ID is ' .$id);
$router->get('hello', fn() => 'Go Luv urself');

$router->get('user/create', function () {
    $userModel = new user();
    $all = $userModel->loadAll();
    require __DIR__ . '/../src/view/create_user.php';
});

$router->post('user', function () {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
});

$router->get('login', [AuthController::class, 'login']);
$router->get('test/{id}', [UserController::class, 'test']);
$router->post('login', [AuthController::class, 'login']);
$router->delete('login', [AuthController::class, 'login']);

$router->get('register', [AuthController::class, 'register']);
$router->post('register', [AuthController::class, 'register']);

$router->get('logout', [AuthController::class, 'logout']);
$router->get('dashboard', [AuthController::class, 'dashboard']);

$router->get('UserDashboard', [UserController::class, 'dashboard']);
$router->get('UserIndex', [UserController::class, 'index']);

$router->get('index', [AuthController::class, 'index']);


$router->get('users/new', [UserController::class, 'showCreateForm']);
$router->post('users/store', [UserController::class, 'store']);

$router->get('index', [AuthController::class, 'index']);
$router->get("test",[UserController::class ,"tests"]);
$router->dispatch();
