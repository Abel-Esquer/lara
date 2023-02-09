<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model{

    protected $table = 'choferes';
    protected $primarykey = 'id';
    protected $allowedFields = [
        "nombre_completo", 
        "descripcion",
        "empresa",
        "ine",
        "curp", 
        "rfc",
        "nss",
        "tipo_sangre",
        "no_licencia",
        "tipo_licencia",
        "vigencia_licencia",
        "telefono",
        "foto_chofer",
        "no_ine",
        "expediente"
    ];

}