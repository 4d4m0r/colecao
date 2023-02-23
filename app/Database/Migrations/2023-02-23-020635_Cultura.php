<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cultura extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cultura' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_especie_cultura' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_meio_cultura' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'n_dpua_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => false,
            ],
            'codigo_col_ext_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'autor_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'metodo_preservacao_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'cultura_descartada_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'n_cul_preser_oleo_cultura' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'n_cul_preser_agua_cultura' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'data_preser_oleo_cultura' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'data_preser_agua_cultura' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'depositante_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'historico_deposito_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'forma_envio_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'restricao_cultura' => [
                'type' => 'TINYINT',
                'constraint' => 4,
                'null' => true,
            ],
            'status_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => true,
            ],
            'observacao_cultura' => [
                'type' => 'VARCHAR',
                'constraint' => 3000,
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id_cultura', true);
        $this->forge->createTable('cultura');
    }

    public function down()
    {
        $this->forge->dropTable('cultura');
    }
}