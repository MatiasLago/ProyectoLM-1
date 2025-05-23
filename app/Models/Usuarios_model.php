<?php 
namespace App\Models;
use CodeIgniter\Model;

class Usuarios_model extends Model 
{
    protected $table = 'usuarios'; 
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido','usuario', 'email', 'pas', 'perfil_id', 'baja','created_at'];
}