<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        return view('pages/principal');
    }

    public function nosotros()
    {
        return view('pages/nosotros');
    }

   /* public function productos()
    {
        return view('pages/productos');
    }
        */

    public function contacto()
    {
        return view('pages/contacto');
    }

    public function comercializacion()
    {
        return view('pages/comercializacion');
    }

    public function terminos()
    {
        return view('pages/terminos');
    }

}
