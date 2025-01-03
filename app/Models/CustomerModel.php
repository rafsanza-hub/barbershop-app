<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table            = 'clients';
    protected $allowedFields    = ['user_id', 'fullname', 'phone_number', 'address'];


    public function getCustomer($id = null)
    {
        if ($id === null) {
            return $this->select(select: 'clients.*, users.username, users.email, users.active')
                ->join('users', 'clients.user_id = users.id')
                ->findAll();
        }
        return $this->select('clients.*, users.username, users.email, users.active')
            ->join('users', 'clients.user_id = users.id')
            ->where('clients.id', $id)
            ->first();
    }
}
