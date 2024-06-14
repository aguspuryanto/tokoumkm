<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'fullname'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'role' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'image' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'token' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'created_at'      => [
				'type'           => 'TIMESTAMP',
				'null'           => true,
			],
            'updated_at'      => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'deleted_at'      => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
		]);
		// primary key
		$this->forge->addKey('id', TRUE);
		// tabel users
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
