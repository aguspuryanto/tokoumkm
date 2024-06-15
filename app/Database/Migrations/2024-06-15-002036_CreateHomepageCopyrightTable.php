<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHomepageCopyrightTable extends Migration
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
            'copyright'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun'       => [
                'type'       => 'VARCHAR',
                'constraint' => '4',
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
        $this->forge->createTable('homepage_copyright');
    }

    public function down()
    {
        $this->forge->dropTable('homepage_copyright');
    }
}
