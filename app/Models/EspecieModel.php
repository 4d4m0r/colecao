<?php

namespace App\Models;

use CodeIgniter\Model;

class EspecieModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'especie';
    protected $primaryKey       = 'id_especie';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_especie',
        'nome_especie',
        'status_tax_especie',
        'tipos_org_especie',
        'aplicacoes_especie',
        'procedencia_especie',
        'substrato_especie',
        'riscos_especie'
    ];

    function getIdEspecie($data)
    {
        $db = \Config\Database::connect();

        $nome_especie = $data['nome_especie'];
        $status_tax_especie = $data['status_tax_especie'];
        $tipos_org_especie = $data['tipos_org_especie'];
        $aplicacoes_especie = $data['aplicacoes_especie'];
        $procedencia_especie = $data['procedencia_especie'];
        $substrato_especie = $data['substrato_especie'];
        $riscos_especie = $data['riscos_especie'];

        $query = $db->query("SELECT * FROM especie 
                                WHERE nome_especie = '$nome_especie' 
                                AND status_tax_especie ='$status_tax_especie'
                                AND tipos_org_especie ='$tipos_org_especie'
                                AND aplicacoes_especie ='$aplicacoes_especie'
                                AND procedencia_especie ='$procedencia_especie'
                                AND substrato_especie ='$substrato_especie'
                                AND riscos_especie ='$riscos_especie'");
        
        $row =  $query->getResultArray();

        return $row;
    }

    function getDadosEspecie(){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT DISTINCT especie.id_especie,especie.nome_especie FROM especie");

        return  $query->getResultArray();
    }

    function verificaExisteEspecie($especie){
        $db = \Config\Database::connect();

        $nome_especie = $especie['nome_especie'];
        $status_tax_especie = $especie['status_tax_especie'];
        if (empty($status_tax_especie)) {
            $status_tax_especie = "null";
        }
        $tipos_org_especie = $especie['tipos_org_especie'];
        if (empty($tipos_org_especie)) {
            $tipos_org_especie = "null";
        }
        $aplicacoes_especie = $especie['aplicacoes_especie'];
        if (empty($aplicacoes_especie)) {
            $aplicacoes_especie = "null";
        }
        $procedencia_especie = $especie['procedencia_especie'];
        if (empty($procedencia_especie)) {
            $procedencia_especie = "null";
        }
        $substrato_especie = $especie['substrato_especie'];
        if (empty($substrato_especie)) {
            $substrato_especie = "null";
        }
        $riscos_especie = $especie['riscos_especie'];
        if (empty($riscos_especie)) {
            $riscos_especie = "null";
        }

        $query = $db->query("SELECT * FROM especie 
                                WHERE nome_especie = '$nome_especie' 
                                AND status_tax_especie ='$status_tax_especie'
                                AND tipos_org_especie ='$tipos_org_especie'
                                AND aplicacoes_especie ='$aplicacoes_especie'
                                AND procedencia_especie ='$procedencia_especie'
                                AND substrato_especie ='$substrato_especie'
                                AND riscos_especie ='$riscos_especie'");

        $row = $query->getResultArray();
        if (empty($row)) {
            return true;
        } else {
            return false;
        }
    }
}
