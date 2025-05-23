<?php
namespace App\Controllers;
use App\Models\Usuarios_model;
use App\Models\consultaModel;

class Usuario_controller extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index() //listado de usuarios
{
    $model = new Usuarios_model();
    $data['usuarios'] = $model->findAll();
    echo view('layouts/plantilla');
   
}

    public function create() //crea nuevos usuarios
    {
        $dato['titulo'] = 'Crear Usuario';
        echo view('layouts/plantilla', $dato);
        echo view('back/registro');
    }    
    

    
    public function formValidation() //valida datos antes de guardar 
    {
        //helper(['form', 'url']); 

        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'usuario'  => 'required|min_length[3]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[200]',
        ]);
        $formModel = new Usuarios_model();

        if (!$input) {
            $dato['titulo'] = 'Registrarse ';
            echo view('layouts/plantilla', $dato);
            echo view('back/registro', ['validation' => $this->validator]);
        } else {
            $formModel->save([
                'Nombre' => $this->request->getVar('nombre'),
                'Apellido' => $this->request->getVar('apellido'),
                'Usuario' => $this->request->getVar('usuario'),
                'Email'  => $this->request->getVar('email'),
                'Pass'  => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success','Usuario registrado con exito');
            return $this->response->redirect(site_url('/registro'));
        }
    }

    


   


    

   
    
}
