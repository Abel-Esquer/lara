<?php

namespace App\Controllers;

use App\Models\EmpresaModel; 

class EmpresaController extends BaseController{
    public function new(){
        return view('empresas/form_empresas');

    }

    public function create(){ 
        $empresaModel = new EmpresaModel();
        $datos = [
            'nombre' => $_POST['nomre']
        ];

        $resultado = $empresaModel->save($datos);
        if($resultado){
            echo '<script>alert("Empresa registrada con exito")</script>';
        }else{
            echo '<script>alert("La empresa no ha podido ser registrada")</script>';
        }
    }

}