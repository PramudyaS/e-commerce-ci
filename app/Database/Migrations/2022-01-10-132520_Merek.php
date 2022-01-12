<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Merek extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'name'  => [
                'type'          =>  'VARCHAR',
                'constraint'    =>  50
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('merek');
    }

    public function down()
    {
        $this->forge->dropTable('merek',true);
    }
}
