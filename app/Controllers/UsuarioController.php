<?php

namespace App\Controllers;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view('usuarios/tabla_usuarios');
    }

    public function form(){

        return view('usuarios/form_usuarios');

    }

    public function save(){ 
        $validation = service('validation');
        $validation -> setRules([
            'nombre' => 'required|alpha_space',

        ]);

        if (!$validation -> withRequest($this->request)->run()) {
            /*dd($validation->getErrors());*/
            return redirect() -> back() -> withInput() -> with('errors' , $validation -> getErrors());
        }

        $usuario = [
            'nombre'=> $this->request->getPost("nombre"),

          ];
          $this->UsuarioModel->insert($usuario);
        
            return redirect()->to("tabla") -> with('msg','usuario añadido correctamente');
    }

    public function findById($Id){

        /*return $productos = $this-> asArray()-> where (['matricula'=>$matricula])->findAll();*/
         
    }
}