<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'randy',
            'email'    => 'akuadmin@gmail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
        ];

        $this->db->table('user')->insert($data);
    }
}