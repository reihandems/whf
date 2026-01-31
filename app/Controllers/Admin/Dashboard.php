<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'dashboard',
            'title' => 'Dashboard'
        ];

        return view('pages/admin/index', $data);
    }
}
