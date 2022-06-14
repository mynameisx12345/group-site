<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $this->load->view('header');
        // $this->load->view('home');
        echo view('header');
        echo view('home');
    }
}
