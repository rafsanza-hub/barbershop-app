<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\CategoryModel;

class Service extends BaseController{

    protected $serviceModel;
    protected $categoryModel;

    public function __construct(){
        $this->serviceModel = new ServiceModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index(){
        $data = [
            'title' => 'Service',
            "services" => $this->serviceModel->getService(),
        ];
        return view('services/index', $data);
    }
    public function create(){
        $data = [
            'title' => 'Create Service',
            'categories' => $this->categoryModel->findAll(),
        ];
        return view('services/create', $data);
    }

    public function save(){
        $this->serviceModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
        ]);
        return redirect()->to('service')->with('success', 'Service created successfully');
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Service',
            'service' => $this->serviceModel->getService($id),
            'categories' => $this->categoryModel->findAll(),
        ];
        return view('services/edit', $data);
    }

    public function delete($id){
        $this->serviceModel->delete($id);
        return redirect()->to('service')->with('success', 'Service deleted successfully');
    }
}