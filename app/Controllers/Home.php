<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('principal'); // O solo 'principal' si usás .php
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }
}

