<?php

require_once __DIR__ . '/../app/utils/bootstrap.php';

use core\Router;
use function app\helpers\view404;
use function app\helpers\viewJson;

$router = new Router();
require_once __DIR__ . '/../routes/api.php';
require_once __DIR__ . '/../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if (strpos($uri, '/api/') === 0) {
    $result = $router->dispatch($uri, $method);

    if ($result === false) {
        http_response_code(404);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Endpoint não encontrado']);
    }
} else {
    $result = $router->dispatch($uri, $method);

    if ($result === false) {
        view404();
    }
}
