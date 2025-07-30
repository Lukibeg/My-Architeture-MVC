<?php
namespace webRoutes;

use app\controllers\HomeController;
use app\controllers\UsuarioController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/sobre', [HomeController::class, 'sobre']);
$router->get('/usuario/{id}', [UsuarioController::class, 'show']);

// Disparando a rota
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$router->dispatch($uri, $method);
