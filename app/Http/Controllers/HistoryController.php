<?php

declare(strict_types=1);

namespace Http\Controllers;

class HistoryController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/history');
        $f3->set('heading', 'history');

        $items = include_once(APP_DIR . '/ui/data/history.php');

        $f3->set('HISTORY_ITEMS', $items);

        echo view('layouts/user-layout');
    }
}
