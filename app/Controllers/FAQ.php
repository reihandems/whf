<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FAQ extends BaseController {
    public function index() {
        return view('faq');
    }
}