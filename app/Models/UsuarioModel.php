<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model{

    protected $table = 'Usuario';
    protected $primarykey = 'id';
    protected $allowedFields = [
        "nombre", 
        "correo",
        "telefono" ,
        "contrasena" ,
        "id_campus", 
        "rol",
        "matricula"
    ];

}