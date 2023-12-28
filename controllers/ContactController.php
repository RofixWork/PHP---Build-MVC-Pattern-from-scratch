<?php

namespace app\controllers;

use app\core\View;

class ContactController
{
    public function index() : string {
        return View::make("contact/index");
    }

    public function create() : string {
        var_dump($_POST);
        return View::make("contact/create");
    }

    public function store() : void {
        var_dump($_POST["username"]);
    }
}