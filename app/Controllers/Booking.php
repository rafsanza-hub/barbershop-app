<?php

namespace App\Controllers;

use App\Models\BarberModel;
use App\Models\BookingModel;
use App\Models\UserModel;

class Booking extends BaseController{
    protected $bookingModel;
    protected $barberModel;

    public function __construct(){
        $this->bookingModel = new BookingModel();
        $this->barberModel = new BarberModel();

    }
    public function index(){
        $data =[
            'title' => 'Booking',
            'bookings' => $this->bookingModel->getAllBooking(),
            'barbers' => $this->barberModel->findAll(),
        ];

        return view('bookings/index', $data);
    }
}

