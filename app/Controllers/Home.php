<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index', ['title' => 'King Barbershop']);
    }
    public function dashboard(){
        return view('dashboard', ['title' => 'Dashboard']);
    }
}
