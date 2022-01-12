<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
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
            'produk_kategori_id'    =>  [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
            ],
            'name'  => [
                'type'          =>  'VARCHAR',
                'constraint'    =>  50
            ],
            'price'  => [
                'type'          =>  'BIGINT',
                'constraint'    =>  50
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('produki');
    }

    public function down()
    {
        $this->forge->dropColumn('produk',true);
    }
}
