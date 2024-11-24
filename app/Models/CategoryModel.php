<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $allowedFields    = ['name'];
    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];




}
