<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $allowedFields    = ['customer_id', 'barber_id', 'service_id', 'date', 'time', 'status'];


    public function getAllBooking()
    {

        return $this->select('
        bookings.id,
        customer.username as customer_name,
        barber.username as barber_name,
        services.name as service_name,
        bookings.date,
        bookings.time,
        bookings.status
    ')
            ->join('auth_groups_users as customer_group', 'customer_group.user_id = bookings.customer_id')  // Join dengan auth_groups_users untuk customer
            ->join('auth_groups as customer_auth_group', 'customer_auth_group.id = customer_group.group_id')  // Join dengan auth_groups untuk mendapatkan nama grup customer
            ->join('users as customer', 'customer.id = bookings.customer_id')  // Bergabung dengan tabel users untuk customer
            ->join('auth_groups_users as barber_group', 'barber_group.user_id = bookings.barber_id')  // Join dengan auth_groups_users untuk barber
            ->join('auth_groups as barber_auth_group', 'barber_auth_group.id = barber_group.group_id')  // Join dengan auth_groups untuk mendapatkan nama grup barber
            ->join('users as barber', 'barber.id = bookings.barber_id')  // Bergabung dengan tabel users untuk barber
            ->join('services', 'services.id = bookings.service_id')  // Bergabung dengan tabel services untuk mendapatkan nama layanan
            ->where('customer_auth_group.name', 'customer')  // Pastikan user adalah customer
            ->where('barber_auth_group.name', 'barber')  // Pastikan user adalah barber
            ->findAll();
    }
}
