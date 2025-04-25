<?php // Ubicación: app/Controllers/Home.php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   {
      $data['titulo']='principal';
      echo view('pages/principal', $data);
      echo view('pages/nosotros');
      echo view('pages/contacto');
   }
}