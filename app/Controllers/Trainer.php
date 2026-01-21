<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Trainer extends BaseController {
    public function index() {
        return view('trainer');
    }

    public function detail() {
        return view('detail_trainer');
    }
}