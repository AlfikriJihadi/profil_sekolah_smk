<?php

namespace App\Controllers\admin;


use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('admin/dashboard');
    }
}
