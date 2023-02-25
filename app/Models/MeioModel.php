<?php

namespace App\Models;

use CodeIgniter\Model;

class MeioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'meio_cultivo';
    protected $primaryKey       = 'id_meio_cultivo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_meio_cultivo',
        'meio_cultivo'
    ];

    function getIdMeio($nome) {
        $db = \Config\Database::connect();

        $query = $db->query("SELECT * FROM meio_cultivo WHERE meio_cultivo = '$nome'");
   
       return  $query->getResultArray();
    }

    function getDadosMeio() {
        $db = \Config\Database::connect();

        $query = $db->query("SELECT * FROM meio_cultivo");
   
       return  $query->getResultArray();
    }
    function verificaExisteMeio($meio){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT * from meio_cultivo m WHERE m.meio_cultivo = '$meio'");

        $row = $query->getResultArray();
        if(empty($row)){
            return true;
        }else{
            return false;
        }
    }
}
