<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Auth extends BaseController {
    public function login() {
        return view('auth/view_login.php');
    }

    public function register() {
        return view('auth/view_register.php');
    }
}