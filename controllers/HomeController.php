<?php

namespace app\controllers;
use app\core\View;
class HomeController
{
    public function index() : string{
        return View::make("index");
    }
}