<?php

namespace App\Controllers;

use App\Models\EmpresaController; 

class EmpresaController extends BaseController
{

    public function create(){ 
        $empresaModel = new EmpresaModel();
        $datos = [
            'nombre' => $_POST['nombre']
        ];

        $resultado = $empresaModel->save($datos);
        if($resultado){
            echo '<script>alert("La empresa se registro con exito")</script>';
        }else{
            echo '<script>alert("La empresa no ha podido ser registrada")</script>';
        }

}