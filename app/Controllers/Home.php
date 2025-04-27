<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        return view('pages/principal');
    }

    public function contacto()
    {
        return view('pages/contacto');
    }

    public function nosotros()
    {
        return view('pages/nosotros');
    }
}
