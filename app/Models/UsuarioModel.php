<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'admin';

    protected $allowedFields = [
        'nome_admin',
        'senha_admin'
    ];

    public function getByName(string $name): array
    {
        $rq =  $this->where('nome_admin', $name)->first();

        return !is_null($rq) ? $rq : [];
    }
}