<?php 

namespace App\Controllers;

class Produk extends BaseController
{
    public function index() {
        return view('produk');
    }

    public function detail() {
        return view('detail');
    }
}