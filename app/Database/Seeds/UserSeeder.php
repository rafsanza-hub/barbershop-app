<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data user untuk customer
        $data_customer = [
            [
                'email'            => 'customer@example.com',
                'username'         => 'customer01',
                'fullname'         => 'Customer One',
                'password_hash'    => Password::hash('password123'), // Hash password
            ]
        ];

        // Data user untuk barber
        $data_barber = [
            [
                'email'            => 'barber@example.com',
                'username'         => 'barber01',
                'fullname'         => 'Barber One',
                'password_hash'    => Password::hash('password123'), // Hash passwor
            ]
        ];

        // Data user untuk admin
        $data_admin = [
            [
                'email'            => 'admin@example.com',
                'username'         => 'admin01',
                'fullname'         => 'Admin One',
                'password_hash'    => Password::hash('admin123'), // Hash password

            ]
        ];

        // Insert data ke tabel 'users'
        $this->db->table('users')->insertBatch(array_merge($data_customer, $data_barber, $data_admin));
    }
}
