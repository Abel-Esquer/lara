<?php

namespace App\Controllers;

use App\Models\UsuarioModel; 

class UsuarioController extends BaseController
{

    public function new(){
        return view('usuarios/form_usuarios');

    }

    public function create(){ 
        $usuarioModel = new UsuarioModel();
        $datos = [
            'nombre_completo' => $_POST['nombre_completo'],
            'descripcion' => $_POST['descripcion'],
            'empresa' => $_POST['empresa'],
            'ine' => $_POST['ine'],
            'curp' => $_POST['curp'],
            'rfc' => $_POST['rfc'],
            'nss' => $_POST['nss'],
            'tipo_sangre' => $_POST['tipo_sangre'],
            'no_licencia' => $_POST['no_licencia'],
            'tipo_licencia' => $_POST['tipo_licencia'],
            'vigencia_licencia' => $_POST['vigencia_licencia'],
            'telefono' => $_POST['telefono'], 
            'foto_chofer' => $_POST['foto_chofer'],
            'no_ine' => $_POST['no_ine'],
            'expediente' => $_POST['expediente']
        ];

        $resultado = $usuarioModel->save($datos);
        if($resultado){
            echo '<script>alert("Usuario registrado con exito")</script>';
        }else{
            echo '<script>alert("El usuario no ha podido ser registrado")</script>';
        }
    }

    public function index(){
        $usuarioModel = new \App\Models\UsuarioModel();
        $usuarios = $usuarioModel->findAll();
        $data = ["usuarios"=>$usuarios];
        return view('usuarios/tabla_usuarios',$data);
    }

    public function show($id){
        $usuarioModel = new \App\Models\UsuarioModel();
        $usuario = $usuarioModel->find($id);
        $data = ["usuario"=>$usuario];
        return view('usuarios/ver_usuarios');
    }
}