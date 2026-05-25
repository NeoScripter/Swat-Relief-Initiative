<?php

declare(strict_types=1);

namespace Http\Controllers;

class HomeController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/home');
        $f3->set('SHOW_BANNER', true);
        $f3->set('heading', 'Swat Relief Initiative');
        echo view('layouts/user-layout');
    }
}
