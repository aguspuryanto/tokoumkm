<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOptionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'option_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'option_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'option_value'       => [
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
        $this->forge->addKey('option_id', true);
        $this->forge->createTable('tbl_options');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_options');
    }
}
