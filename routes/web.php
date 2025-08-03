<?php
namespace webRoutes;

use app\controllers\HomeController;
use app\controllers\UsuarioController;
use app\controllers\ListUsersController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/sobre', [HomeController::class, 'sobre']);
$router->get('/usuario/{id}', [UsuarioController::class, 'show']);
