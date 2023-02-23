<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up(){
        $this->forge->addField([
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome_admin' => [
                'type' => 'VARCHAR',
                'constraint' => 45
            ],
            'senha_admin' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('admin');
    }

    public function down(){
        $this->forge->dropTable('admin');
    }
}
