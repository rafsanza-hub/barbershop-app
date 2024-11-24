<?php

namespace App\Controllers;

use App\Models\ServiceModel;

class Service extends BaseController{

    protected $serviceModel;

    public function __construct(){
        $this->serviceModel = new ServiceModel();
    }

    public function index(){
        $data = [
            'title' => 'Service',
            "services" => $this->serviceModel->getAllService(),
        ];
        return view('services/index', $data);
    }
}