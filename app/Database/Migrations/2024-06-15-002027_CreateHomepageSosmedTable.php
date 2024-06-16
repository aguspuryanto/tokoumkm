<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHomepageSosmedTable extends Migration
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
            'link_facebook'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_instagram'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_tiktok'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_youtube'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_tokopedia'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_shopee'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'link_lazada'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tampil_facebook'       => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
            ],
            'tampil_instagram'       => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
            ],
            'tampil_tiktok'       => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
            ],
            'tampil_youtube'       => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
            ],
            'tampil_tokopedia'       => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
            ],
            'tampil_shopee'       => [
                'type'       => 'ENUM',
                'constraint' => ['yes', 'no'],
                'default'    => 'yes',
            ],
            'tampil_lazada'       => [
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
        $this->forge->createTable('homepage_footer_sosmed');
    }

    public function down()
    {
        $this->forge->dropTable('homepage_footer_sosmed');
    }
}
