<?php
namespace App\Models;
use CodeIgniter\Model;

class EmpresaModel extends Model{

    protected $table = 'empresa';
    protected $primarykey = 'id';
    protected $allowedFields = [
        "nombre"
    ];

}