<?php

declare(strict_types=1);

namespace Http\Controllers;

class VolunteerController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/volunteers');
        $f3->set('SHOW_BANNER', true);
        $f3->set('heading', 'Volunteers');
        $f3->set('title', 'Volunteers');
        echo view('layouts/user-layout');
    }
}
