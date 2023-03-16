<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdicionarLocalCultura extends Migration
{
    public function up()
    {
        $this->forge->addColumn('cultura', [
            'cidade_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
            'estado_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
            'pais_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('minha_tabela', 'nova_coluna');
    }
}
