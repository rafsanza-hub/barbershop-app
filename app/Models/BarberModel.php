<?php

namespace App\Models;

use CodeIgniter\Model;

class BarberModel extends Model
{
    protected $table            = 'employees';
    protected $allowedFields    = ['fullname', 'user_id'];


    public function getBarber($id = null)
    {
        if ($id === null) {
            return $this->select('employees.*, users.username, users.email, users.active')
                ->join('users', 'employees.user_id = users.id')
                ->findAll();
        }
        return $this->select('employees.*, users.username, users.email, users.active')
            ->join('users', 'employees.user_id = users.id')
            ->where('employees.id', $id)
            ->first();
    }
}
