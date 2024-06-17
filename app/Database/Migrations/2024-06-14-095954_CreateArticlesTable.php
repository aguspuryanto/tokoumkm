<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticlesTable extends Migration
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
            'judul'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slug'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true,
            ],
            'category_id' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'tags'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi'   => [
                'type'       => 'TEXT',
            ],
            'gambar'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'label_seo'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status'      => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default'    => 'active',
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
        $this->forge->createTable('articles');
    }

    public function down()
    {
        $this->forge->dropTable('articles');
    }
}
