<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'list_kata_kunci_target' => [
                'type'       => 'TEXT',
            ],
            'list_buying_keyword'    => [
                'type'       => 'TEXT',
            ],
            'list_kata_bombastis'    => [
                'type'       => 'TEXT',
            ],
            'nomer_wa'               => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'deskripsi_utama'        => [
                'type'       => 'TEXT',
            ],
            'list_kota_target'       => [
                'type'       => 'TEXT',
            ],
            'created_at'             => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'             => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contents');
    }

    public function down()
    {
        $this->forge->dropTable('contents');
    }
}
