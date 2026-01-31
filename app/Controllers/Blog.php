<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController {
    public function index() {
        $data = [
            'menu' => 'blog'
        ];

        return view('blog', $data);
    }
}