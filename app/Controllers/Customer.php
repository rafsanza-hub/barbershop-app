<?php
namespace App\Controllers;

class Customer extends BaseController{

    public function booking(){
        $data['title'] = 'Booking Page';
        return view('customers/booking');
    }

}