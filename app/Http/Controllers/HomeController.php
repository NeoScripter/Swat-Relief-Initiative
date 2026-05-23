<?php

declare(strict_types=1);

namespace Http\Controllers;

class HomeController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/home.htm');
        echo \Template::instance()->render('layouts/public.htm');
    }
}
