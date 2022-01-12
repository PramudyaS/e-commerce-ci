<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invoice extends Migration
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
            'kode_transaksi'    => [
                'type'              => 'VARCHAR',
                'constraint'        => 10,
            ],
            'user_id'  => [
                'type'          =>  'VARCHAR',
                'constraint'    =>  50
            ],
            'total'     => [
                'type'          => 'BIGINT',
                'constraint'    => 60
            ],
            'status'        => [
                'type'          => 'VARCHAR',
                'constraint'    => 20,
            ],
            'date'          => [
                'type'          => 'DATE'
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('invoice');
    }

    public function down()
    {
        $this->forge->dropTable('invoice');
    }
}
