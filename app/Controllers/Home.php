<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data                   = $this->data;
        
        return view('home', $data);
    }
}
