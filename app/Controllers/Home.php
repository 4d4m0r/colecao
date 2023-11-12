<?php

namespace App\Controllers;

use App\Models\CulturaModel;

class Home extends BaseController
{
    public function index()
    {
        return view('user/template/header')
            . view('user/home')
            . view('user/template/footer');
    }

    public function sobre()
    {
        return view('user/template/header')
            . view('user/sobre')
            . view('user/template/footer');
    }

    public function contato()
    {
        return view('user/template/header')
            . view('user/contato')
            . view('user/template/footer');
    }

    public function searchCultura() {
        $nome = $this->request->getPost('nome');
        $data['culturas'] = (new CulturaModel())->getDadosCulturaPublica($nome);
    
        return view('user/cultura_results', $data);
    }
    

    // public function insere(){
    //     $dados = [
    //         'nome_admin' => "admin",
    //         'senha_admin' => password_hash('123',PASSWORD_DEFAULT)
    //     ];

    //     (new UsuarioModel())->save($dados);
    // }
}
