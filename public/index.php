<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/helpers/view.php';

use core\Router;
use app\controllers\HomeController;
use app\controllers\UsuarioController;

$router = new Router();

require_once __DIR__ . '/../routes/web.php';

