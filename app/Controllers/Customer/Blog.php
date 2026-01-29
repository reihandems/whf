<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Blog extends BaseController {
    public function index() {
        $data = [
            'menu' => 'blog'
        ];

        return view('pages/customer/view_blog.php', $data);
    }
}