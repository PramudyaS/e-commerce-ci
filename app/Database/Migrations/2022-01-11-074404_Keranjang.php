<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keranjang extends Migration
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
            'product_id'    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
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
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang',true);
    }
}
