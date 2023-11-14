<?php

namespace App\Models;

use CodeIgniter\Model;

class ContatoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'contato';
    protected $primaryKey       = 'id_contato';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_contato',
        'nome_contato',
        'email_contato',
        'dpua_contato',
        'texto_contato'
    ];
}
