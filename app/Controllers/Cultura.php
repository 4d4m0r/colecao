<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CulturaModel;
use App\Models\EspecieModel;
use App\Models\MeioModel;

class Cultura extends BaseController
{
    public function index()
    {
        $cultura = new CulturaModel();
        return view('admin/template/header.php')
            . view('admin/crud_cultura/cultura', [
                'culturas' => $cultura->getDadosCultura()
            ]);
    }

    public function verCultura($id = null)
    {
        $cultura = new CulturaModel();

        return view('admin/template/header.php')
            . view('admin/crud_cultura/ver_cultura', [
                'cultura' => $cultura->getDadosCulturaById($id)
            ]);
    }

    public function delete($id)
    {
        $cultura = new CulturaModel();

        if ($cultura->where('id_cultura', $id)->delete($id)) {
            echo view('errors/messages', ['message' => 'Cultura excluída com sucesso!']);
        } else {
            echo "Erro";
        }
    }

    public function create()
    {
        $especie = new EspecieModel();
        $meio = new MeioModel();
        return view('admin/template/header.php')
            . view('admin/crud_cultura/inserir_cultura', [
                'especies' => $especie->getDadosEspecie(),
                'meios' => $meio->getDadosMeio(),
            ]);
    }
    
    function especie_cultura()
    {
        $especieModel = new EspecieModel();
        $especie = $especieModel->where('id_especie', $this->request->getVar('id_especie'))->findAll();
        echo json_encode($especie);
    }
    public function data($data)
    {
        $dat = str_replace('/', '-', $data);
        $newdate = strtotime($dat);
        $newformat = date('Y-m-d', $newdate);
        return $newformat;
    }

    function get_cidade_estado_nome($city_id, $state_id) {
        if ($city_id == null && $state_id == null){
            $cidade_nome = '-';
            $estado_nome = '-';
            return array($cidade_nome, $estado_nome);
        }
        $url_cidade = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios/{$city_id}";
        $url_estado = "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$state_id}";
        
        $response_cidade = file_get_contents($url_cidade);
        $response_estado = file_get_contents($url_estado);
        
        $cidade_json = json_decode($response_cidade, true);
        $estado_json = json_decode($response_estado, true);
        
        $cidade_nome = $cidade_json['nome'];
        $estado_nome = $estado_json['nome'];
        
        return array($cidade_nome, $estado_nome);
    }

    public function store()
    {

        $cultura = new CulturaModel();

        $cidadeId = intval($this->request->getVar('municipios'));
        $estadoId = intval($this->request->getVar('estados'));

        $cidade_estado = $this->get_cidade_estado_nome($cidadeId,$estadoId);

        $data = [
            'id_especie_cultura' => intval($this->request->getVar('id_especie')),
            'id_meio_cultura' => intval($this->request->getVar('id_meio')),
            'n_dpua_cultura' => $this->request->getVar('n_dpua_cultura'),
            'codigo_col_ext_cultura' => $this->request->getVar('codigo_col_ext_cultura'),
            'autor_cultura' => $this->request->getVar('autor_cultura'),
            'metodo_preservacao_cultura' => $this->request->getVar('metodo_preservacao_cultura'),
            'cultura_descartada_cultura' => $this->request->getVar('cultura_descartada_cultura'),
            'n_cul_preser_oleo_cultura' => intval($this->request->getVar('n_cul_preser_oleo_cultura')),
            'n_cul_preser_agua_cultura' => intval($this->request->getVar('n_cul_preser_agua_cultura')),
            'data_preser_oleo_cultura' => $this->data($this->request->getVar('data_preser_oleo_cultura')),
            'data_preser_agua_cultura' => $this->data($this->request->getVar('data_preser_agua_cultura')),
            'depositante_cultura' => $this->request->getVar('depositante_cultura'),
            'historico_deposito_cultura' => $this->request->getVar('historico_deposito_cultura'),
            'forma_envio_cultura' => $this->request->getVar('forma_envio_cultura'),
            'restricao_cultura' => intval($this->request->getVar('restricao_cultura')),
            'status_cultura' => $this->request->getVar('status_cultura'),
            'observacao_cultura' => $this->request->getVar('observacao_cultura'),
            'cidade_cultura' => $cidade_estado[0],
            'estado_cultura' => $cidade_estado[1],
            'pais_cultura' => $this->request->getVar('paises'),
        ];

        $cultura->save($data);

        return $this->response->redirect(site_url('/cultura'));
    }

    public function singleCultura($id = null)
    {
        $cultura = new CulturaModel();
        $especie = new EspecieModel();
        $meio = new MeioModel();

        return view('admin/template/header.php')
            . view('admin/crud_cultura/editar_cultura', [
                'cultura' => $cultura->getDadosCulturaById($id),
                'especies' => $especie->getDadosEspecie(),
                'meios' => $meio->getDadosMeio(),
            ]);
    }

    public function update()
    {
        $cultura = new CulturaModel();

        $cidadeId = intval($this->request->getVar('municipios'));
        $estadoId = intval($this->request->getVar('estados'));

        $cidade_estado = $this->get_cidade_estado_nome($cidadeId,$estadoId);

        $id = $this->request->getVar('id_cultura');

        $data = [
            'id_especie_cultura' => intval($this->request->getVar('id_especie')),
            'id_meio_cultura' => intval($this->request->getVar('id_meio')),
            'n_dpua_cultura' => $this->request->getVar('n_dpua_cultura'),
            'codigo_col_ext_cultura' => $this->request->getVar('codigo_col_ext_cultura'),
            'autor_cultura' => $this->request->getVar('autor_cultura'),
            'metodo_preservacao_cultura' => $this->request->getVar('metodo_preservacao_cultura'),
            'cultura_descartada_cultura' => $this->request->getVar('cultura_descartada_cultura'),
            'n_cul_preser_oleo_cultura' => intval($this->request->getVar('n_cul_preser_oleo_cultura')),
            'n_cul_preser_agua_cultura' => intval($this->request->getVar('n_cul_preser_agua_cultura')),
            'data_preser_oleo_cultura' => $this->data($this->request->getVar('data_preser_oleo_cultura')),
            'data_preser_agua_cultura' => $this->data($this->request->getVar('data_preser_agua_cultura')),
            'depositante_cultura' => $this->request->getVar('depositante_cultura'),
            'historico_deposito_cultura' => $this->request->getVar('historico_deposito_cultura'),
            'forma_envio_cultura' => $this->request->getVar('forma_envio_cultura'),
            'restricao_cultura' => intval($this->request->getVar('restricao_cultura')),
            'status_cultura' => $this->request->getVar('status_cultura'),
            'observacao_cultura' => $this->request->getVar('observacao_cultura'),
            'cidade_cultura' => $cidade_estado[0],
            'estado_cultura' => $cidade_estado[1],
            'pais_cultura' => $this->request->getVar('paises'),
        ];
        $cultura->update($id, $data);
        return $this->response->redirect(site_url('/cultura'));
    }
}
