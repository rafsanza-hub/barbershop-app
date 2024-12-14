<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'group_id' => 1, // Assuming 'customer' group has id 1
                'user_id' => 1,   // User ID for the customer
            ],
            [
                'group_id' => 2, // Assuming 'barber' group has id 2
                'user_id' => 2,   // User ID for the barber
            ],
            [
                'group_id' => 3, // Assuming 'user' group has id 3
                'user_id' => 3,   // User ID for a regular user
            ]
        ];

        // Insert data into the auth_groups_users table
        $this->db->table('auth_groups_users')->insertBatch($data);
    }
}
