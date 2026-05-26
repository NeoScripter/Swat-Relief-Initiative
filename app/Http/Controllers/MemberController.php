<?php

declare(strict_types=1);

namespace Http\Controllers;

class MemberController
{
    public function index($f3)
    {
        $f3->set('inc', 'pages/members');
        $f3->set('SHOW_BANNER', true);
        $f3->set('heading', 'Memberships');
        $f3->set('title', 'Memberships');
        echo view('layouts/user-layout');
    }
}
