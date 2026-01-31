<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'menu' => 'home'
        ];
        return view('landing_page', $data);
    }
}
