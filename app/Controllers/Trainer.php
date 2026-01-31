<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Trainer extends BaseController {
    public function index() {
        $data = [
            'menu' => 'trainer'
        ];

        return view('trainer', $data);
    }

    public function detail() {
        $data = [
            'menu' => 'trainer'
        ];

        return view('detail_trainer', $data);
    }
}