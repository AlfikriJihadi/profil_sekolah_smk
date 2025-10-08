<?php

namespace App\Controllers\admin;


use App\Controllers\BaseController;

class Galeri extends BaseController
{
    public function index(): string
    {
        return view('admin/galeri');
    }
}
