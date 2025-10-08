<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index(): string
    {
        return view('user/landing/index');
    }
}
