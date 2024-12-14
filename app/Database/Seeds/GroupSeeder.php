<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'customer',
            ],
            [
                'name' => 'barber',
            ],
            [
                'name' => 'admin',
            ]
        ];

        // Insert data into the auth_groups table
        $this->db->table('auth_groups')->insertBatch($data);
    }
}
