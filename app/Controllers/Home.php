<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    // public function insere(){
    //     $dados = [
    //         'nome_admin' => "admin",
    //         'senha_admin' => password_hash('123',PASSWORD_DEFAULT)
    //     ];

    //     (new UsuarioModel())->save($dados);
    // }
}
