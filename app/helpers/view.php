<?php

namespace app\helpers;
function view(string $viewName, array $data = []) {
    extract($data);
    require_once base_path("app/view/{$viewName}.php");
}

function base_path(string $path = ''): string {
    return rtrim(__DIR__ . '/../../', '/') . '/' . ltrim($path, '/');
}
