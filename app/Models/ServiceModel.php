<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table            = 'services';
    protected $allowedFields    = ['name', 'description', 'price', 'category_id'];
    protected $validationRules      = [];
    protected $validationMessages   = [];


    public function getAllService(){
        
        return $this->select('services.*, categories.name as category_name')
        ->join('categories', 'categories.id = services.category_id')
        ->findAll();
    }


}
