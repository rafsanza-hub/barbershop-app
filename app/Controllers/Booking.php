<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;

class Booking extends BaseController{
    protected $bookingModel;
    protected $userModel;

    public function __construct(){
        $this->bookingModel = new BookingModel();
        $this->userModel = new UserModel();

    }
    public function index(){
        $data =[
            'title' => 'Booking',
            'bookings' => $this->bookingModel->getBooking(),
            'barbers' => $this->userModel->getUserByRole('barber'),
        ];

        return view('bookings/index', $data);
    }
}

