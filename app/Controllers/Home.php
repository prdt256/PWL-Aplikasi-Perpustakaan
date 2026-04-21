<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
				$a = 1;
        return view('beranda');
    }
}
