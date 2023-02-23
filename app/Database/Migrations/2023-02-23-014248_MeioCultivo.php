<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMeioCultivoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_meio_cultivo' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'meio_cultivo' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
        ]);
        $this->forge->addKey('id_meio_cultivo', true);
        $this->forge->createTable('meio_cultivo');
    }

    public function down()
    {
        $this->forge->dropTable('meio_cultivo');
    }
}
