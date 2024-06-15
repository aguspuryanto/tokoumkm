<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHomepageTestimonyTable extends Migration
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
            'judul1'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan1' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'banner1'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'judul2'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan2' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'banner2'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'judul3'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan3' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'banner3'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'color'       => [
                'type'       => 'VARCHAR',
                'constraint' => '7',
            ],
            'tampil'      => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
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
        $this->forge->createTable('homepage_testimony');
    }

    public function down()
    {
        $this->forge->dropTable('homepage_testimony');
    }
}
