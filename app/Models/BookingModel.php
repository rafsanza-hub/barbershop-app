<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $allowedFields    = ['customer_id', 'barber_id', 'service_id', 'status'];



}
