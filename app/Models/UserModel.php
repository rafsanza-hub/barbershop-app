<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = ['username', 'email', 'password_hash'];


    public function getUserByRole($roleName){
        return $this->select('users.*')
        ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
        ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id')
        ->where('auth_groups.name', $roleName)
        ->findAll();

    }
}