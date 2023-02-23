<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeysToCultura extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('id_especie_cultura', 'especie', 'id_especie');
        $this->forge->addForeignKey('id_meio_cultura', 'meio_cultivo', 'id_meio_cultivo');
    }

    public function down()
    {
        $this->forge->dropForeignKey('cultura', 'id_especie_cultura');
        $this->forge->dropForeignKey('cultura', 'id_meio_cultura');
    }
}