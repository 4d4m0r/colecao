<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\EspecieModel;

class Especie extends BaseController
{
    public function index()
    {
        $especie = new EspecieModel();
        return view('admin/template/header')
            . view('admin/crud_especie/especie', [
                'especies' => $especie->findAll()
            ]);
    }

    public function delete($id)
    {
        $especie = new EspecieModel();

        if ($especie->where('id_especie', $id)->delete($id)) {
            return redirect()->to('/especie');
        } else {
            echo "Erro";
        }
    }

    public function create()
    {
        return view('admin/template/header')
            . view('admin/crud_especie/inserir_especie');
    }

    public function store()
    {
        $especie = new EspecieModel();

        $data = [
            'nome_especie' => $this->request->getVar('nome_especie'),
            'status_tax_especie' => $this->request->getVar('status_tax_especie'),
            'tipos_org_especie' => $this->request->getVar('tipos_org_especie'),
            'procedencia_especie' => $this->request->getVar('procedencia_especie'),
            'substrato_especie' => $this->request->getVar('substrato_especie'),
            'riscos_especie' => $this->request->getVar('riscos_especie'),
            'aplicacoes_especie' => $this->request->getVar('aplicacoes_especie')
        ];
        $especie->save($data);
        return $this->response->redirect(site_url('/especie'));
    }

    public function verEspecie($id = null)
    {
        $especie = new EspecieModel();

        $data['especie'] = $especie->where('id_especie', $id)->first();
        return view('admin/template/header')
            . view('admin/crud_especie/ver_especie', $data);
    }

    public function singleEspecie($id = null)
    {
        $especie = new EspecieModel();

        $data['especie'] = $especie->where('id_especie', $id)->first();
        return view('admin/template/header')
            . view('admin/crud_especie/editar_especie', $data);
    }

    public function update()
    {
        $especie = new EspecieModel();

        $id = $this->request->getVar('id_especie');
        $data = [
            'nome_especie' => $this->request->getVar('nome_especie'),
            'status_tax_especie' => $this->request->getVar('status_tax_especie'),
            'tipos_org_especie' => $this->request->getVar('tipos_org_especie'),
            'procedencia_especie' => $this->request->getVar('procedencia_especie'),
            'substrato_especie' => $this->request->getVar('substrato_especie'),
            'riscos_especie' => $this->request->getVar('riscos_especie'),
            'aplicacoes_especie' => $this->request->getVar('aplicacoes_especie')
        ];
        $especie->update($id, $data);
        return $this->response->redirect(site_url('/especie'));
    }

    public function get_especie_details()
    {
        $especie = new EspecieModel();

        $id_especie = $this->request->getVar('id_especie');

        $especie_details = $especie->getEspecieById($id_especie);

        $data['especie_details'] = $especie_details;

        return view('admin/crud_especie/especie_details', $data);
    }
}
