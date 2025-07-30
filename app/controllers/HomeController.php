<?php

namespace app\controllers;
use function app\helpers\view;

class HomeController
{
    public function index()
    {
        $nome = 'Lucas';
        view('home', ['nome' => $nome]);
    }

    public function sobre()
    {
        echo "Sobre nós!";
    }
}
