<?php

namespace App\Controllers;

class Members extends BaseController
{
    public function index()
    {
    }

    public function openMemA(){
      echo view('header');
      echo view('kenneth');
    }

    public function openMemB(){
      echo view('header');
      echo view('jorelyn');
    }

    public function openMemC(){
      echo view('header');
      echo view('nikka');
    }

    public function openMemD(){
      echo view('header');
      echo view('lesly');
    }

    public function openMemE(){
      echo view('header');
      echo view('jessa');
    }

    public function gallery(){
      echo view('header');
      echo view('gallery');
    }
}
