<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;


class UsuarioController extends ResourceController
{
    public function index(){
        return view('usuarios/tabla_usuarios');
    }

    public function new(){
        return view('usuarios/form_usuarios');

    }

    public function create(){ 
        $datos = [
            'nombre_completo' => $_POST['nombre_completo'],
            'descripcion' => $_POST['descripcion'],
            'empresa' => $_POST['empresa'],
            'ine' => $_POST['ine'],
            'curp' => $_POST['curp'],
            'rfc' => $_POST['rfc'],
            'nss' => $_POST['nss'],
            'tipo sangre' => $_POST['tipo sangre'],
            'no licencia' => $_POST['no licencia'],
            'tipo licencia' => $_POST['tipo licencia'],
            'vigencia licencia' => $_POST['vigencia licencia'],
            'telefono' => $_POST['telefono'], 
            'foto chofer' => $_POST['foto chofer'],
            'no ine' => $_POST['no ine'],
            'expediente' => $_POST['expediente']
        ];

        $respuesta = $this->model->save($datos);

        if($respuesta){
            return redirect()->to("tabla") -> with('msg','usuario añadido correctamente');
        }else{
            return redirect()->to("tabla") -> with('msg','usuario no añadido correctamente');
        }
        /*
        $usuario = [
            'nombre'=> $this->request->getPost("nombre"),

          ];
          $this->UsuarioModel->insert($usuario);
        
            return redirect()->to("tabla") -> with('msg','usuario añadido correctamente');
        */    
    }

    public function show($Id){

        /*return $productos = $this-> asArray()-> where (['matricula'=>$matricula])->findAll();*/
         
    }
}