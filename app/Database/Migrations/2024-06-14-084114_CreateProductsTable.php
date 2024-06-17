<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'gambar'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi'   => [
                'type'       => 'TEXT',
            ],
            'harga'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'harga_diskon' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'pstatus'      => [
                'type'       => 'ENUM',
                'constraint' => ['publish', 'draft'],
                'default'    => 'draft',
            ],
            'label'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'label_color' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'link_order'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'  => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'  => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
