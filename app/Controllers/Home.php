<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data                   = $this->data;
        $data['galleries']      = preg_grep('/^([^.])/', scandir(FCPATH . '/images/gallery/', SCANDIR_SORT_DESCENDING));
        
        return view('home', $data);
    }
}
