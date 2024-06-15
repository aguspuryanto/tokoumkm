<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHomepageBannerTable extends Migration
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
            'banner1'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'banner2' => [
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
        $this->forge->createTable('homepage_banner');
    }

    public function down()
    {
        $this->forge->dropTable('homepage_banner');
    }
}
