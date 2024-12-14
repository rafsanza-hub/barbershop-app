<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'customer_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'barber_id'   => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'service_id'  => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'date'        => [
                'type' => 'DATE',
                'null' => false,
            ],
            'time'        => [
                'type' => 'TIME',
                'null' => false,
            ],
            'status'      => [
                'type'       => "ENUM('pending', 'confirmed', 'completed', 'canceled')",
                'default'    => 'pending',
            ],
            'created_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('customer_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('barber_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('service_id', 'services', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('bookings');
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
