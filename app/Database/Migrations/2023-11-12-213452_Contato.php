<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_CreateContatoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_contato' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome_contato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email_contato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'dpua_contato' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'texto_contato' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id_contato');
        $this->forge->createTable('contato');
    }

    public function down()
    {
        $this->forge->dropTable('contato');
    }
}
