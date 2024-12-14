<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGoogleIdToUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'google_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'after' => 'id',
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
                'after' => 'username',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', ['google_id', 'fullname']);
       
    }
}
