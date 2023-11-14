<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ContatoModel;

class Contato extends BaseController
{

    public function store() {
        $contatoModel = new ContatoModel();
        $data = [
            'nome_contato' => $this->request->getVar('nome_contato'),
            'email_contato' => $this->request->getVar('email_contato'),
            'dpua_contato' => $this->request->getVar('dpua_contato'),
            'texto_contato' => $this->request->getVar('texto_contato')
        ];
        $contatoModel->save($data);

        session()->setFlashdata('success', 'Mensagem enviada com sucesso!');

        return $this->response->redirect(site_url('/contato'));
    }

    public function contatos()
    {
        $contato = new ContatoModel();
        return view('admin/template/header.php')
            . view('admin/crud_contatos/contatos', [
                'contatos' => $contato->findAll()
            ]);
    }

    public function verContato($id = null){
        $contatoModel = new ContatoModel();
        $data['contato'] = $contatoModel->where('id_contato', $id)->first();
        return view('admin/template/header.php')
                .view('admin/crud_contatos/ver_contato', $data);
    }
}
