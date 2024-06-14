<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // $faker = \Faker\Factory::create();
        $data = [
            'username' => 'Administrator', //$faker->userName,
            'email'    => 'umkm2024@gmail.com', //$faker->email,
            'password' => password_hash('umkm2024', PASSWORD_DEFAULT), //$faker->password
        ];
        $this->db->table('users')->insert($data);
    }
}
