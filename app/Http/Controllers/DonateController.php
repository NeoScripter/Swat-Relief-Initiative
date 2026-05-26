<?php

declare(strict_types=1);

namespace Http\Controllers;

class DonateController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/donate');
        $f3->set('heading', 'Donate');
        $f3->set('title', 'Donate');
        echo view('layouts/user-layout');
    }
}
