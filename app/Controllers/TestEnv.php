<?php

namespace App\Controllers;

class TestEnv extends BaseController
{
    public function index()
    {
        echo "CI_ENVIRONMENT: " . env('CI_ENVIRONMENT') . "<br>";
        echo "DOKU_CLIENT_ID: " . env('DOKU_CLIENT_ID') . "<br>";
        echo "DOKU_URL: " . env('DOKU_URL') . "<br>";
    }
}
