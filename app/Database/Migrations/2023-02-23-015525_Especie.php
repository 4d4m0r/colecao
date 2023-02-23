<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEspecieTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_especie' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ],
            'status_tax_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ],
            'tipos_org_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ],
            'aplicacoes_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ],
            'procedencia_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ],
            'substrato_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ],
            'riscos_especie' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true
            ]
        ]);

        $this->forge->addKey('id_especie', true);
        $this->forge->createTable('especie');
    }

    public function down()
    {
        $this->forge->dropTable('especie');
    }
}
