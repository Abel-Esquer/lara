<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model{

    protected $table = 'choferes';
    protected $primarykey = 'id';
    protected $allowedFields = [
        "nombre_completo", 
        "descripcion",
        "empresa" ,
        "ine" ,
        "curp", 
        "rfc",
        "nss",
        "tipo sangre",
        "no licencia",
        "tipo licencia",
        "vigencia licencia",
        "telefono",
        "foto chofer",
        "no ine",
        "expediente"
    ];

}