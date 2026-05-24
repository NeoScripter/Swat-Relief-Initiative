<?php

declare(strict_types=1);

namespace Http\Controllers;

class HistoryController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/history');
        $f3->set('heading', 'history');
        echo view('layouts/user-layout');
    }
}
