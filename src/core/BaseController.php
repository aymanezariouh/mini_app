<?php

namespace App\core;

require __DIR__ . '/../../vendor/autoload.php';

use App\core\View;

abstract class BaseController
{
    protected function render($view, $data = [])
    {
        return View::view($view, $data);

    }
protected function renders($view , $data = []){
    return View::twigview($view , $data);
}
}
